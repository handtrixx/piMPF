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
      
      
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="display-2">pi Managable Picture Frame</h2>
            </div>
        </div>
    </div>
    <div class="container">
    <div class="row">
    <div class="col-12">
    <h4 class="display-4">Pictures</h2>
    </div>
    </div>
   
        <div class="row mb-3">
            <div class="col-12">
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
          <form action="deleteFile.php" method="post">
               <input id="delPHP" type="hidden" name="filename" value="testdata">
        <button type="button" id="AbortdelSingleFile" class="btn btn-secondary" data-dismiss="modal">Abort</button>
        <button type="button" id="delSingleFile" class="btn btn-danger">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>


 <!-- Modal for Upload -->
 <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Upload</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">   

     <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Upload</span>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01" multiple>
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
  </div>
</div>
   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Abort</button>
        <button type="button" class="btn btn-primary">Upload</button>
      </div>
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
    $('#imageTable').DataTable( {
        "dom": '<"container-fluid"<"row"<"col-xl-2"l><"col-xl-7 text-left"f><"col-xl-3 text-right"B>>><"container-fluid"<"row"<"col-12 px-0"rt>>><"container-fluid"<"row"<"col-6"i><"col-6"p>>>',

        "ajax": 'files.php',
        
       
  order: [[1, 'asc']],
  buttons: [           
            {
                text: '<span id="toggleView">Upload<i class="fas fa-upload ml-1"></i></span>',
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
            className: 'col-12 col-sm-2 col-lg-1 colImage',
            render: function ( data, type, row, meta ) {return '<img data-src="'+data+'" class="img-fluid lazy">';} },
            { 
            "id":"1",
            targets: 1, 
            cellType: 'div',
            className: 'col-12 col-sm-4 col-md-3 col-lg-4 colName',
            render: function ( data, type, row, meta ) {return '<a href="'+data+'" target=_blank>'+data.replace("images/", "")+'</a>';}},
            { 
            targets: 2,
            cellType: 'div',
            className: 'col-12 col-sm-3 col-md-2 col-lg-2 colSize'  
            },
            { 
            targets: 3,
            cellType: 'div',
            className: 'd-none d-md-block col-md-3 col-lg-3 colDate'     
            },
            { 
            "orderable": false,
            targets: 4, 
            cellType: 'div',
            className: 'col-12 col-sm-3 col-md-2 col-lg-2 text-right colActions',
            render: function ( data, type, row, meta ) {return '<button type="button" class="btn btn-outline-danger btn-sm mr-1" data-toggle="modal" data-target="#deleteModal" data-id="'+row[1]+'" data-option="delete" id="delSingle";"><i class="fas fa-trash"></i></button><div class="btn-group btn-group-toggle" data-toggle="buttons"><label class="btn btn-sm btn-outline-primary"><input type="checkbox" name="options" id="option1" autocomplete="off" checked=""> <i class="fas fa-check"></i></label></div>' }
            }
            
        ],
    "drawCallback": function(data){
        
        
        
        $("tr").addClass("row");
        $("tr").addClass("mx-1 my-3 py-3 tableRow shadow-sm");
        $("tbody").addClass("container-fluid");
        $("thead").addClass("container-fluid d-none d-sm-table-row");
        $("thead tr").removeClass("tableRow  my-3 py-3").addClass("tableHead py-1");
        
        
         $('img.lazy').lazy();
         
         
         //$("th").remove();
         
    }  
        
       
    } );
} );
</script>




<script>
$(document).on("click", "#delSingle", function () {
var fileName = $(this).data('id');
$(".modal-body #fileName" ).empty();
$(".modal-body #fileName" ).wrapInner(fileName);
$('#delSingleFile').data('id',fileName);
}); 
</script>


<script>
$(document).on("click", "#delSingleFile", function () { 
    var fileName = $(this).data('id');
    $( "#delPHP" ).val(fileName);
    $.post( "deleteFile.php", { filename: fileName}, function( data ) {
    console.log( data );
    if (data == "true")
     {
         $("#deleteModalHeader").html("Confirmation")
         $("#delMessage").html("has been deleted")
         $( "#AbortdelSingleFile" ).remove();
         $("#delSingleFile").removeClass("btn-danger").addClass("btn-success");
         $("#delSingleFile").html("OK");
         $( "#delSingleFile" ).click(function() {
             $('#deleteModal').modal('hide');
            location.reload();
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
            location.reload();
            });
</script>


  </body>
</html>