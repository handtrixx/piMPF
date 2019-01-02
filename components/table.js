toggleView = "cards"
var table = $('#imageTable').DataTable( {
    "dom": '<"container-fluid"<"bg-white shadow-sm px-2" <"row pt-2"<"col-sm-6 col-md-4 col-lg-3 text-left"f><"col-sm-6 col-md-2 col-lg-2"l><"col-sm-12 col-md-6 col-lg-7 text-right"B>>>><"container-fluid"<"row"<"col-12 px-0"rt>>><"container-fluid"<"bg-white shadow-sm px-2" <"row pt-2"<"col-12 col-sm-6 mb-2"i><"col-sm-6 mb-2"p>>>>',
    "ajax": 'components/getFiles.php',    
    "pageLength": 12,
    "lengthMenu": [ [12, 48, 96, -1], [12, 48, 96, "All"] ]  ,  
    order: [[1, 'asc']],
    buttons: [           
        {
            text: '<span data-toggle="modal" data-target="#uploadModal" data-option="upload" id="btnUpload";"><i class="fas fa-upload mx-1"></i>Upload</span>',                
            className: 'btn btn-sm btn-outline-primary ml-1',
            init: function(api, node, config) {$(node).removeClass('btn-secondary')},
            action: function ( ) {
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
                        $('#uploadinfoText').html('Choose files by file browser or drag them into box.')
                        table.ajax.reload();
                        });
                    }); 
            }
        },
        {
            text: '<span id="btnRefresh";"><i class="fas fa-sync-alt"></i></span>',                
            className: 'btn btn-sm btn-outline-primary ml-1',
            init: function(api, node, config) {$(node).removeClass('btn-secondary')},
            action: function ( ) {
                table.ajax.reload();
            }
        },
        {
            text: '<span id="toggleView"><i class="fas fa-table"></i></span>',
            className: 'btn btn-sm btn-outline-primary ml-1 d-none d-sm-block',
            init: function(api, node, config) {$(node).removeClass('btn-secondary')},
            action: function ( ) {
                if ( toggleView == "table") {
                    $("#toggleView").html('<i class="fas fa-table"></i>');
                    toggleView = "cards"
                } 
                else if ( toggleView == "cards" ) {
                    $("#toggleView").html('<i class="fas fa-th-large"></i>');
                    toggleView = "table"
                }
                table.ajax.reload();
            }
        },
        {
            text: '<span id="toggleView"><i class="fas fa-check"></i></span>',
            className: 'btn btn-outline-primary btn-sm btn-checkAll ml-3 mr-1',
            init: function(api, node, config) {$(node).removeClass('btn-secondary')},
            action: function ( ) {
                    if ($(".btn-checkAll").hasClass('active'))
                    {
                        $(".btn-checkAll").removeClass( 'active' );
                        $(".labelSingle").removeClass( 'active' );
                        $('.btn-delAll').removeClass('btn-outline-danger').addClass('btn-outline-light')
                        
                    }
                    else
                    {
                        $(".btn-checkAll").addClass( 'active' );
                        $(".labelSingle").addClass( 'active' );
                        $('.btn-delAll').addClass('btn-outline-danger').removeClass('btn-outline-light')
                        answer='';
                        $('#Group .active').each(function(){
                            answer= answer+$(this).attr('id')+','; 
                            $('.btn-delAll').removeClass('btn-outline-light').addClass('btn-outline-danger')
                        });
                        answer=answer.slice(0,-1);
                    }
                    
                }
                
            
        },
        {
            text: '<span id="toggleView"><i class="fas fa-trash"></i></span>',
            className: 'btn btn-outline-light btn-sm btn-delAll ml-1 mr-1',
            init: function(api, node, config) {$(node).removeClass('btn-secondary')},
            action: function ( ) {
                }
                
            
        },
        {
            text: '<span id="toggleView"><i class="fas fa-download"></i></span>',
            className: 'btn btn-outline-light btn-sm ml-1 mr-1',
            init: function(api, node, config) {$(node).removeClass('btn-secondary')},
            action: function ( ) {
                }
                
            
        }
        
    ],
    columns: [
        { 
        "orderable": false, 
        targets: 0, 
        cellType: 'div',
        className: 'col-12 colImage',
               
        createdCell: function (nTd, cellData, oData, iRow, iCol) {        
            imageurl= 'components/getImage.php?filename='+ encodeURIComponent(cellData)+'';        	
                if (toggleView == "table") 
                {                        
                    if (cellData!=null) 
                    {
                        $(nTd).removeClass("imageCard").addClass("imageTable")
                        cellData = cellData;
                        cellData = '<img data-src="'+imageurl+'" class="img-fluid lazy">';
                        $(nTd).html(cellData);
                    }                        
                }
                else
                {                       
                    
                    content = '<div data-src="'+imageurl+'" class="imageCard lazy"></div>';                   
                    $(nTd).html(content);                                             
                }                  
        }},
        { 
        "id":"1",
        targets: 1, 
        cellType: 'div',
        className: 'col-12 colName text-truncate',
        render: function ( data, type, row, meta ) {return '<small>'+data.replace("images/", "")+'</small>';}},
        { 
        targets: 2,
        cellType: 'div',
        className: 'col-12 colSize',
        render: function ( data, type, row, meta ) {return '<small>'+data+'</small>';}},
        { 
        targets: 3,
        cellType: 'div',
        className: 'col-12 colDate',
        render: function ( data, type, row, meta ) {return '<small>'+data+'</small>';}},
        { 
        "orderable": false,
        targets: 4, 
        cellType: 'div',
        className: 'col-12 text-right colActions',
        render: function ( data, type, row, meta ) {
            return '<a role="button" class="btn btn-outline-secondary btn-sm mr-1" href="'+row[1]+'" target=_blank>'+
                    '<i class="fas fa-file-download"></i></a>'+
                '<button type="button" class="btn btn-outline-danger btn-sm mr-1" data-toggle="modal" '+
                    'data-target="#deleteModal" data-id="'+row[1]+'" data-option="delete" id="delSingle";">'+
                    '<i class="fas fa-trash"></i></button>'+
                '<div class="btn-group btn-group-toggle" data-toggle="buttons" id="Group"><label class="btn btn-sm btn-outline-primary labelSingle" id="'+row[1]+'">'+
                        '<input type="checkbox" name="checkSingle" id="checkSingle" data-id="'+row[1]+'" autocomplete="off"> <i class="fas fa-check"></i></label></div>' }
        }            
    ],
    "drawCallback": function(data){    
        
        if (toggleView == "table") 
        {
            //Remove Old Defintiions
            $("thead").removeClass("d-none");
            $("table").removeClass("container-fluid");
            $("tbody").removeClass("row");    
            $('tr').removeClass("tableCard d-block")
            $('.HelpWrapper').removeClass('col-12 col-sm-6 col-md-4 col-lg-3 mb-2');
            $(".colImage").removeClass("px-0")  
            $(".colActions").removeClass("mb-2")           
            //Add New Definitions            
            $("tr").addClass("row");
            $("tr").addClass("mx-3 my-3 py-3 tableRow shadow-sm");
            $("tbody").addClass("container-fluid");
            $("thead").addClass("container-fluid d-none d-sm-table-row");
            $("thead tr").removeClass("tableRow my-3 py-3").addClass("tableHead");
            $(".colImage").addClass("col-sm-2 col-lg-1")
            $(".colName").addClass("col-sm-4 col-md-3 col-lg-4")
            $(".colSize").addClass("col-sm-3 col-md-2 col-lg-2")
            $(".colDate").addClass("d-none d-md-block col-md-3 col-lg-3")
            $(".colActions").addClass("col-sm-3 col-md-2 col-lg-2")
        }
        else
        {
            //Remove Old Defintiions
            $("tr").removeClass("row");
            $("tr").removeClass("mx-1 my-3 py-3 tableRow");
            $("tbody").removeClass("container-fluid");
            $("thead").removeClass("container-fluid d-none d-sm-table-row");
            $("thead tr").addClass("tableRow  my-3 py-3").removeClass("tableHead");
            $(".colImage").removeClass("col-sm-2 col-lg-1")
            $(".colName").removeClass("col-sm-4 col-md-3 col-lg-4")
            $(".colSize").removeClass("col-sm-3 col-md-2 col-lg-2")
            $(".colDate").removeClass("d-none d-md-block col-md-3 col-lg-3")
            $(".colActions").removeClass("col-sm-3 col-md-2 col-lg-2")       
            //Add New Definitions
            $("thead").addClass("d-none");
            $("table").addClass("container-fluid");
            $("tbody").addClass("row");    
            $('tbody tr').addClass("tableCard shadow-sm d-block").wrap("<div class='HelpWrapper col-12 col-sm-6 col-md-4 col-lg-3 mb-2'></div>");
            $(".colImage").addClass("px-0")  
            $(".colActions").addClass("mb-2")            
        }
        $('.lazy').lazy();
        $.holdReady( false );
       
    }       
} 
);