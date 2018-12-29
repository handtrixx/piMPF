<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/fontawesome/css/all.css" >
    <!-- Datatables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/b-1.5.4/cr-1.5.0/r-2.2.2/rr-1.2.4/sl-1.2.6/datatables.min.css"/>
    <title>piMPF</title>    
<style>
body {
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    background-color: #fff;
}
.table thead th {
    vertical-align: bottom;
    border-bottom: 0px solid #dee2e6;
}
.tableRow {
    background: rgba(0,0,0,.03);
    color: #343a40;
    border: 1px solid rgba(0,0,0,.125);
}
.tableCard {
    background: rgba(0,0,0,.03);
    color: #343a40;
    border: 1px solid rgba(0,0,0,.125);
}
.tableHead {
    background: #343a40;
    color: #fff;
    border: 1px solid rgba(0,0,0,.125);
}
table.dataTable thead>tr>th.sorting_asc, table.dataTable thead>tr>th.sorting_desc, table.dataTable thead>tr>th.sorting, table.dataTable thead>tr>td.sorting_asc, table.dataTable thead>tr>td.sorting_desc, table.dataTable thead>tr>td.sorting {
    padding-right: 0;
}
.table td, .table th {
    padding: 0;
    vertical-align: top;
    border-top: 0px solid #dee2e6;
}
table.dataTable thead .sorting:before, table.dataTable thead .sorting_asc:before, table.dataTable thead .sorting_desc:before, table.dataTable thead .sorting_asc_disabled:before, table.dataTable thead .sorting_desc_disabled:before {
    right: 0;
    content: "";
}
table.dataTable thead .sorting:after, table.dataTable thead .sorting_asc:after, table.dataTable thead .sorting_desc:after, table.dataTable thead .sorting_asc_disabled:after, table.dataTable thead .sorting_desc_disabled:after {
    right: 0;
    content: "";
}

div.dataTables_wrapper div.dataTables_filter {
    text-align: left;
}

.dataTables_length {
    text-align: left !important;
}
</style>
</head>
<body>     
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="#">piMPF</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">14:19:32</a>
            </li>
        </ul>    
        <form class="form-inline my-2 my-lg-0 ml-auto">     
            <button class="btn btn-outline-success my-2 my-sm-0 mr-1" type="submit"><i class="fas fa-cogs"></i></button>
            <button class="btn btn-outline-success my-2 my-sm-0 mr-1" type="submit"><i class="fas fa-sync"></i></button>
            <button class="btn btn-outline-success my-2 my-sm-0 mr-1" type="submit"><i class="far fa-window-maximize"></i></button>
        </form>
    </div>
</nav>     
      
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-1 px-0"></div>
        <div class="col-xl-10 px-0">
            <div class="container-fluid">
                <div class="row my-2">
                    <div class="col-4">                        
                        <img src="components/help/piMPF_logo.png" class="img-fluid" alt="logo">
                    </div>
                    <div class="col-8">
                    <h2 class="display-2">piMPF</h2>
                    <p>Raspberry Pi Manageable Picture Frame</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">                        
                        <h3><i class="fas fa-play-circle mr-1"></i>Slideshow</h3>
                        <hr>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-12">
                        <button type="button" class="btn btn-primary btn-lg btn-block"><i class="fas fa-play mr-1"></i>Start!</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">                        
                        <h3><i class="fas fa-file-image mr-1"></i>Picture Manager</h3>
                        <hr>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12 px-0">
                        <table id="imageTable" class="table" style="width:100%;">
                            <thead>
                                <th></th>
                                <th><span class="ml-3">Filename</span></th>
                                <th><span class="ml-3">Size</span></th>
                                <th><span class="ml-3">Date</span></th>
                                <th><span class="mr-3">Action</span></th>
                            </thead>         
                            <tbody>
                            </tbody>                    
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">                        
                        <h3><i class="fas fa-cogs mr-1"></i>Settings</h3>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-1 px-0"></div>
    </div>
</div>

        
<!-- Modal for File Deletion-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalHeader">Are you sure?</h5>
            </div>
            <div class="modal-body">
                File <mark><span name="fileName" id="fileName"></span></mark> <span id="delMessage">will be deleted from piMPF</span>.
            </div>
            <div class="modal-footer">       
                <button type="button" id="AbortdelSingleFile" class="btn btn-secondary" data-dismiss="modal">Abort</button>
                <button type="button" id="delSingleFile" class="btn btn-danger">Delete</button>
                <button type="button" id="delConfirm" class="d-none btn btn-success" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for File Upload-->
<div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalHeader">Select Files for Upload</h5>
            </div>            
            <div class="modal-body">
                <form id="uploadForm" method="post" enctype="multipart/form-data">
                    <input type="file" name="files[]" multiple>
                    <input type="submit" value="Upload File" name="submit">
                </form>                        
            </div>     
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/b-1.5.4/cr-1.5.0/r-2.2.2/rr-1.2.4/sl-1.2.6/datatables.min.js"></script>
<script src="assets/lazyload/jquery.lazy.min.js"></script>


<script>
$(document).ready(function() {
    toggleView = "cards"
    var table = $('#imageTable').DataTable( {
        "dom": '<"container-fluid"<"row"<"col-sm-6 col-md-4 col-lg-3 text-left"f><"col-sm-6 col-md-2 col-lg-2"l><"col-sm-12 col-md-6 col-lg-7 text-right"B>>><"container-fluid"<"row"<"col-12 px-0"rt>>><"container-fluid"<"row"<"col-6"i><"col-6"p>>>',
        "ajax": 'files.php',            
        order: [[1, 'asc']],
        buttons: [           
            {
                text: '<span data-toggle="modal" data-target="#uploadModal" data-option="upload" id="btnUpload";"><i class="fas fa-upload mx-1"></i>Upload</span>',                
                className: 'btn btn-sm btn-outline-primary ml-1',
                init: function(api, node, config) {$(node).removeClass('btn-secondary')},
                action: function ( ) {
                    const url = 'uploadFiles.php';
                    const form = document.querySelector('#uploadForm');
                    form.addEventListener('submit', e => {
                        e.preventDefault();
                        const files = document.querySelector('[type=file]').files;
                        const formData = new FormData();
                        for (let i = 0; i < files.length; i++) {
                            let file = files[i];
                            formData.append('files[]', file);
                        }
                        fetch(url, {
                            method: 'POST',
                            body: formData
                        }).then(response => {
                            //console.log(response);
                            $('#uploadModal').modal('hide');
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
                className: 'btn btn-sm btn-outline-primary ml-1',
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
                text: '<span id="toggleView"><i class="fas fa-trash"></i></span>',
                className: 'btn btn-outline-danger btn-sm ml-3 mr-1',
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
            }
        ],
        columns: [
            { 
            "orderable": false, 
            targets: 0, 
            cellType: 'div',
            className: 'col-12 colImage',
            render: function ( data, type, row, meta ) {return '<img data-src="'+data+'" class="img-fluid lazy">';} },
            { 
            "id":"1",
            targets: 1, 
            cellType: 'div',
            className: 'col-12 colName',
            render: function ( data, type, row, meta ) {return '<a href="'+data+'" target=_blank>'+data.replace("images/", "")+'</a>';}},
            { 
            targets: 2,
            cellType: 'div',
            className: 'col-12 colSize'  
            },
            { 
            targets: 3,
            cellType: 'div',
            className: 'col-12 colDate'     
            },
            { 
            "orderable": false,
            targets: 4, 
            cellType: 'div',
            className: 'col-12 text-right colActions',
            render: function ( data, type, row, meta ) {
                return '<button type="button" class="btn btn-outline-danger btn-sm mr-1" data-toggle="modal" data-target="#deleteModal" data-id="'+row[1]+'" data-option="delete" id="delSingle";"><i class="fas fa-trash"></i></button><div class="btn-group btn-group-toggle" data-toggle="buttons"><label class="btn btn-sm btn-outline-primary"><input type="checkbox" name="options" id="option1" autocomplete="off" checked=""> <i class="fas fa-check"></i></label></div>' }
            }            
        ],
        "drawCallback": function(data){    
            if (toggleView == "table") 
            {
                //Remove Old Defintiions
                $("thead").removeClass("d-none");
                $("table").removeClass("container-fluid");
                $("tbody").removeClass("row");    
                $('tr').removeClass("tableCard")
                $('.HelpWrapper').removeClass('col-12 col-sm-6 col-md-4 col-lg-3 mb-2');
                $(".colImage").removeClass("px-0")  
                $(".colActions").removeClass("mb-2")           
                //Add New Definitions            
                $("tr").addClass("row");
                $("tr").addClass("mx-1 my-3 py-3 tableRow shadow-sm");
                $("tbody").addClass("container-fluid");
                $("thead").addClass("container-fluid d-none d-sm-table-row");
                $("thead tr").removeClass("tableRow  my-3 py-3").addClass("tableHead py-1");
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
                $("thead tr").addClass("tableRow  my-3 py-3").removeClass("tableHead py-1");
                $(".colImage").removeClass("col-sm-2 col-lg-1")
                $(".colName").removeClass("col-sm-4 col-md-3 col-lg-4")
                $(".colSize").removeClass("col-sm-3 col-md-2 col-lg-2")
                $(".colDate").removeClass("d-none d-md-block col-md-3 col-lg-3")
                $(".colActions").removeClass("col-sm-3 col-md-2 col-lg-2")       
                //Add New Definitions
                $("thead").addClass("d-none");
                $("table").addClass("container-fluid");
                $("tbody").addClass("row");    
                $('tbody tr').addClass("tableCard shadow-sm").wrap("<div class='HelpWrapper col-12 col-sm-6 col-md-4 col-lg-3 mb-2'></div>");
                $(".colImage").addClass("px-0")  
                $(".colActions").addClass("mb-2")    
            }
            $('img.lazy').lazy();
        }       
    } 
);
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
    $.post( "deleteFile.php", { filename: fileName}, function( data ) { 
        if (data == "true")
        {
            $("#deleteModalHeader").html("Confirmation")
            $("#delMessage").html("has been deleted")
            $("#AbortdelSingleFile" ).addClass("d-none");
            $("#delSingleFile").addClass("d-none");           
            $("#delConfirm").removeClass("d-none")
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

});
</script>
</body>
</html>