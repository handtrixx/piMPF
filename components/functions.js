//Screensaver init
function screensaverInit(intervalDuration) {
    var carouselHTML = "";
    $.getJSON( "components/getFiles.php", function( data ) {        
        arr = data.data;     
        for ( var i = 0, l = arr.length; i < l; i++ ) {  
            carouselHTML=carouselHTML+'<div class="carousel-item" ><img data-src="'+arr[i][0]+'" class="screensaverImg lazy"></div>'
        }
        $(".carousel-inner").html(carouselHTML)
        $( ".carousel-item" ).first().addClass( "active" );  
        $('.carousel-item').attr("data-interval",intervalDuration)
        $.fn.carousel.Constructor.prototype.cycle = function (event) {
            if (!event) {
                this._isPaused = false;
            }
            if (this._interval) {
                clearInterval(this._interval)
                this._interval = null;
            }
            if (this._config.interval && !this._isPaused) {

                var $ele = $('.carousel-item');
                var newInterval = $ele.data('interval') || this._config.interval;
                this._interval = setInterval(
                (document.visibilityState ? this.nextWhenVisible : this.next).bind(this),
                newInterval
                );
            }
            lazyScreen();
    };
        
    });
}
$( "#screensaverModal" ).click(function( event ) {
    fullscreen();
    $('#screensaverModal').modal('hide')
});

//Screensaver Image download onyl when seenable
function lazyScreen() {
    $('img.lazy.screensaverImg').Lazy({  
        visibleOnly: true
    });
}

//Current Time
function time() {
    var now = new Date(Date.now());
    hour = now.getHours()
    minutes = now.getMinutes()
    var now = new Date(Date.now());
    var formattedTime = (hour<10 ? '0' : '') + hour + ":" +(minutes<10 ? '0' : '') + minutes;
    $('#timeScreensaver').html(formattedTime);

    window.setInterval(function(){
        var now = new Date(Date.now());
        hour = now.getHours()
        minutes = now.getMinutes()

        var formattedTime = (hour<10 ? '0' : '') + hour + ":" +(minutes<10 ? '0' : '') + minutes;
        $('#timeScreensaver').html(formattedTime);
    }, 60000);
}

//Current Date
function date() {
    var d = new Date();
    var month = d.getMonth()+1;
    var day = d.getDate();
    var formattedDate = d.getFullYear() + '/' +
        (month<10 ? '0' : '') + month + '/' +
        (day<10 ? '0' : '') + day;
    $('#dateScreensaver').html(formattedDate);
    
    window.setInterval(function(){
        var d = new Date();
    var month = d.getMonth()+1;
    var day = d.getDate();
    var formattedDate = d.getFullYear() + '/' +
        (month<10 ? '0' : '') + month + '/' +
        (day<10 ? '0' : '') + day;
    $('#dateScreensaver').html(formattedDate);
    }, 300000); 
}  

//Fullscreen Switch
function fullscreen() {
    var isInFullScreen = (document.fullscreenElement && document.fullscreenElement !== null) ||
        (document.webkitFullscreenElement && document.webkitFullscreenElement !== null) ||
        (document.mozFullScreenElement && document.mozFullScreenElement !== null) ||
        (document.msFullscreenElement && document.msFullscreenElement !== null);

    var docElm = document.documentElement;
    if (!isInFullScreen) {
        if (docElm.requestFullscreen) {
            docElm.requestFullscreen();
        } else if (docElm.mozRequestFullScreen) {
            docElm.mozRequestFullScreen();
        } else if (docElm.webkitRequestFullScreen) {
            docElm.webkitRequestFullScreen();
        } else if (docElm.msRequestFullscreen) {
            docElm.msRequestFullscreen();
        }
    } else {
        if (document.exitFullscreen) {
            document.exitFullscreen();
        } else if (document.webkitExitFullscreen) {
            document.webkitExitFullscreen();
        } else if (document.mozCancelFullScreen) {
            document.mozCancelFullScreen();
        } else if (document.msExitFullscreen) {
            document.msExitFullscreen();
        }
    }
}



//Get or use Standard Settings
function settingsGet() {
    $.post( "config.php", function( config ) {
        values = JSON.parse(config);
        if (values.showTime == "true")
        {   
            $("#timeCheck").prop('checked', true);       
            time();
        }
        else
        {
            $("#timeCheck").prop('checked', false);
            $('#timeScreensaver').empty();
        }    
        if (values.showDate == "true"){   
            $("#dateCheck").prop('checked', true);            
            date();
        }
        else
        {
            $("#dateCheck").prop('checked', false);   
            $('#dateScreensaver').empty();
        }
        if (values.interval != "")
        {
            intervalDuration=values.interval*1000;
            $('#FormControlSelectInterval').prepend($("<option />").val(intervalDuration).text(values.interval).prop('selected', true));               
           screensaverInit(intervalDuration);         
        }       
    }).fail(function() {
        console.log("Configuration not found, will create init config. Nothing to worry.")
        settingsSave();
      })
      ;
}

//Reset Settings
function settingsReset() {
    location.reload();
}

// Save Settings
function settingsSave() {    
    postTime=$("#timeCheck").prop('checked')
    postDate=$("#dateCheck").prop('checked')
    postInterval=$("#FormControlSelectInterval option:selected").text()
    data='{"showTime":"'+postTime+'","showDate":"'+postDate+'","interval":'+postInterval+'}';   
    $.ajax({
        type: "POST",
        url: "components/setConfig.php",
        data: { string: data},
    })
    .done(function(response) {    
  })
  .fail(function() {
    alert( "error" );
  })
  .always(function() {
    location.reload();
  });; 
}

//Upload Files
function uploadFiles() {
    
    /*
    const url = 'components/uploadFiles.php';
    const form = document.querySelector('#uploadForm');
    form.addEventListener('submit', e => {
        e.preventDefault();
        const files = document.querySelector('[type=file]').files;
        const formData = new FormData();
        $('#uploadInput').addClass("d-none");
        $('#loadingSpinner').removeClass("d-none");
        $('#uploadinfoText').html('Please wait until files are uploaded.')
        for (let i = 0; i < files.length; i++) {
            let file = files[i];
            formData.append('files[]', file);
        }
        fetch(url, {
            method: 'POST',
            body: formData
        }).then(response => {
            $('#uploadModal').modal('hide');
            $('#uploadInput').removeClass("d-none");
            $('#loadingSpinner').addClass("d-none");
            $('#uploadinfoText').html('Choose files by file browser or drag them into the box.')
            table.ajax.reload();
            });
        }); 
        */
      
}



// Delete Files
$(document).on("click", "#delSingle", function () {
    var fileName = $(this).data('id');
    $(".modal-body #fileName" ).empty();
    $(".modal-body #fileName" ).wrapInner(fileName);
    $('#delSingleFile').data('id',fileName);
    $("#delConfirm").addClass("d-none");
    $("#delSingleFile").removeClass("d-none");
    $("#AbortdelSingleFile" ).removeClass("d-none");
    $("#deleteModalHeader").html("Are you sure?");
    $("#delMessage").html("will be deleted from piMPF")
}); 
$(document).on("click", "#delSingleFile", function () {
    var fileName = $(this).data('id');
    $.post( "components/deleteFile.php", { filename: fileName}, function( data ) { 
        if (data == "true")
        {
            $("#deleteModalHeader").html("Confirmation")
            $("#delMessage").html("has been deleted")
            $("#AbortdelSingleFile" ).addClass("d-none");
            $("#delSingleFile").addClass("d-none");           
            $("#delConfirm").removeClass("d-none")
            $(".btn-checkAll").removeClass( 'active' );
            $( "#delConfirm" ).click(function() {             
                $('#deleteModal').modal('hide');
                table.ajax.reload();
            });            
        }
        else
        {
            $("#deleteModalHeader").html("Error")
            $("#delMessage").html("could not be deleted")
            $("#delSingleFile").remove();         
        }    
    });
});
$( "#AbortdelSingleFile" ).click(function() {
    $('#deleteModal').modal('hide');
    table.ajax.reload();
});

//Delete All Files
$(document).on("click", "#Group", function () {
    $('.btn-delAll').addClass('btn-outline-light').removeClass('btn-outline-danger')
            answer='';
            $('#Group .active').each(function(){
                answer= answer+$(this).attr('id')+','; 
                $('.btn-delAll').removeClass('btn-outline-light').addClass('btn-outline-danger')
            });
            answer=answer.slice(0,-1);
});
$(document).on("click", ".btn-delAll", function () {
    if ( $( ".btn-delAll" ).is( ".btn-outline-danger" ) ) {             
    var fileName = answer;
    $(".modal-body #fileName" ).empty();
    $(".modal-body #fileName" ).wrapInner(fileName);
    $('#delSingleFile').data('id',fileName);
    $("#delConfirm").addClass("d-none");
    $("#delSingleFile").removeClass("d-none");
    $("#AbortdelSingleFile" ).removeClass("d-none");
    $("#deleteModalHeader").html("Are you sure?");
    $("#delMessage").html("will be deleted from piMPF")
    $("#deleteModal").modal()
    $('.btn-delAll').addClass('btn-outline-light').removeClass('btn-outline-danger')
        }
    else {
        console.log("no selection")
    }    
});



 