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
            <div class="col-12">
                <h1 class="display-1">pi Multiple Picture Frame</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col-12">
                <table id="imageTable" class="table" style="width:100%;">
                   
        <tbody>
            </tbody>
                    
                </table>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col-12">
                <h2 class="display-2">Pictures</h2>
                <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                    
         <div class="input-group ">
    <input type="file" class="custom-file-input " placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon2">
    <label class="custom-file-label " for="inputGroupFile01"><i class="fas fa-upload mr-1"></i>Upload</label>
  </div>           
                    
  
  <div class="btn-group" role="group" aria-label="Second group">
    <button type="button" class="btn btn-outline-danger mb-2" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash mr-1"></i>Delete Selected Pictures</button>


  </div>
 
</div>
            </div>
        </div>
        <div class="row">
            <div class="col-6 col-sm-3 col-lg-2">
                <div class="card mb-3">
                    <img src="images/daisy-s-1375598.jpg" class="card-img-top" alt="images/daisy-s-1375598.jpg">
                    <div class="card-header p-1 d-flex justify-content-end">
                          
                               <button type="button" class="btn btn-outline-info btn-sm mr-1" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fas fa-info-circle"></i></button>
                        <button type="button" class="btn btn-outline-danger btn-sm mr-1" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash"></i></button>
                       
  
        
     
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
  <label class="btn btn-sm btn-outline-primary">
    <input type="checkbox" name="options" id="option1" autocomplete="off" checked> <i class="fas fa-check"></i>
  </label>
 
</div>
     
                    </div>
                    <div class="collapse" id="collapseExample">
                    <div class="card-body p-1">
                        <p class="card-title my-0"><small>images/daisy-s-1375598.jpg</small></p>
                        <p class="card-text my-0"><small class="text-muted">30kb</small></p>
                        <p class="card-text my-0"><small class="text-muted">2018-12-25</small></p>
                    </div>
                    </div>
                </div>   
            </div>
                        <div class="col-6 col-sm-3 col-lg-2">
                <div class="card mb-3">
                    <img src="images/daisy-s-1375598.jpg" class="card-img-top" alt="images/daisy-s-1375598.jpg">
                    <div class="card-header p-1 d-flex justify-content-end">
                          
                               <button type="button" class="btn btn-outline-info btn-sm mr-1" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fas fa-info-circle"></i></button>
                        <button type="button" class="btn btn-outline-danger btn-sm mr-1" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash"></i></button>
                       
  
        
     
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
  <label class="btn btn-sm btn-outline-primary">
    <input type="checkbox" name="options" id="option1" autocomplete="off" checked> <i class="fas fa-check"></i>
  </label>
 
</div>
     
                    </div>
                    <div class="collapse" id="collapseExample">
                    <div class="card-body p-1">
                        <p class="card-title my-0"><small>images/daisy-s-1375598.jpg</small></p>
                        <p class="card-text my-0"><small class="text-muted">30kb</small></p>
                        <p class="card-text my-0"><small class="text-muted">2018-12-25</small></p>
                    </div>
                    </div>
                </div>   
            </div>
                        <div class="col-6 col-sm-3 col-lg-2">
                <div class="card mb-3">
                    <img src="images/daisy-s-1375598.jpg" class="card-img-top" alt="images/daisy-s-1375598.jpg">
                    <div class="card-header p-1 d-flex justify-content-end">
                          
                               <button type="button" class="btn btn-outline-info btn-sm mr-1" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fas fa-info-circle"></i></button>
                        <button type="button" class="btn btn-outline-danger btn-sm mr-1" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash"></i></button>
                       
  
        
     
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
  <label class="btn btn-sm btn-outline-primary">
    <input type="checkbox" name="options" id="option1" autocomplete="off" checked> <i class="fas fa-check"></i>
  </label>
 
</div>
     
                    </div>
                    <div class="collapse" id="collapseExample">
                    <div class="card-body p-1">
                        <p class="card-title my-0"><small>images/daisy-s-1375598.jpg</small></p>
                        <p class="card-text my-0"><small class="text-muted">30kb</small></p>
                        <p class="card-text my-0"><small class="text-muted">2018-12-25</small></p>
                    </div>
                    </div>
                </div>   
            </div>
                        <div class="col-6 col-sm-3 col-lg-2">
                <div class="card mb-3">
                    <img src="images/daisy-s-1375598.jpg" class="card-img-top" alt="images/daisy-s-1375598.jpg">
                    <div class="card-header p-1 d-flex justify-content-end">
                          
                               <button type="button" class="btn btn-outline-info btn-sm mr-1" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fas fa-info-circle"></i></button>
                        <button type="button" class="btn btn-outline-danger btn-sm mr-1" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash"></i></button>
                       
  
        
     
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
  <label class="btn btn-sm btn-outline-primary">
    <input type="checkbox" name="options" id="option1" autocomplete="off" checked> <i class="fas fa-check"></i>
  </label>
 
</div>
     
                    </div>
                    <div class="collapse" id="collapseExample">
                    <div class="card-body p-1">
                        <p class="card-title my-0"><small>images/daisy-s-1375598.jpg</small></p>
                        <p class="card-text my-0"><small class="text-muted">30kb</small></p>
                        <p class="card-text my-0"><small class="text-muted">2018-12-25</small></p>
                    </div>
                    </div>
                </div>   
            </div>
                        <div class="col-6 col-sm-3 col-lg-2">
                <div class="card mb-3">
                    <img src="images/daisy-s-1375598.jpg" class="card-img-top" alt="images/daisy-s-1375598.jpg">
                    <div class="card-header p-1 d-flex justify-content-end">
                          
                               <button type="button" class="btn btn-outline-info btn-sm mr-1" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fas fa-info-circle"></i></button>
                        <button type="button" class="btn btn-outline-danger btn-sm mr-1" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash"></i></button>
                       
  
        
     
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
  <label class="btn btn-sm btn-outline-primary">
    <input type="checkbox" name="options" id="option1" autocomplete="off" checked> <i class="fas fa-check"></i>
  </label>
 
</div>
     
                    </div>
                    <div class="collapse" id="collapseExample">
                    <div class="card-body p-1">
                        <p class="card-title my-0"><small>images/daisy-s-1375598.jpg</small></p>
                        <p class="card-text my-0"><small class="text-muted">30kb</small></p>
                        <p class="card-text my-0"><small class="text-muted">2018-12-25</small></p>
                    </div>
                    </div>
                </div>   
            </div>
                        <div class="col-6 col-sm-3 col-lg-2">
                <div class="card mb-3">
                    <img src="images/daisy-s-1375598.jpg" class="card-img-top" alt="images/daisy-s-1375598.jpg">
                    <div class="card-header p-1 d-flex justify-content-end">
                          
                               <button type="button" class="btn btn-outline-info btn-sm mr-1" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fas fa-info-circle"></i></button>
                        <button type="button" class="btn btn-outline-danger btn-sm mr-1" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash"></i></button>
                       
  
        
     
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
  <label class="btn btn-sm btn-outline-primary">
    <input type="checkbox" name="options" id="option1" autocomplete="off" checked> <i class="fas fa-check"></i>
  </label>
 
</div>
     
                    </div>
                    <div class="collapse" id="collapseExample">
                    <div class="card-body p-1">
                        <p class="card-title my-0"><small>images/daisy-s-1375598.jpg</small></p>
                        <p class="card-text my-0"><small class="text-muted">30kb</small></p>
                        <p class="card-text my-0"><small class="text-muted">2018-12-25</small></p>
                    </div>
                    </div>
                </div>   
            </div>
                        <div class="col-6 col-sm-3 col-lg-2">
                <div class="card mb-3">
                    <img src="images/daisy-s-1375598.jpg" class="card-img-top" alt="images/daisy-s-1375598.jpg">
                    <div class="card-header p-1 d-flex justify-content-end">
                          
                               <button type="button" class="btn btn-outline-info btn-sm mr-1" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fas fa-info-circle"></i></button>
                        <button type="button" class="btn btn-outline-danger btn-sm mr-1" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash"></i></button>
                       
  
        
     
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
  <label class="btn btn-sm btn-outline-primary">
    <input type="checkbox" name="options" id="option1" autocomplete="off" checked> <i class="fas fa-check"></i>
  </label>
 
</div>
     
                    </div>
                    <div class="collapse" id="collapseExample">
                    <div class="card-body p-1">
                        <p class="card-title my-0"><small>images/daisy-s-1375598.jpg</small></p>
                        <p class="card-text my-0"><small class="text-muted">30kb</small></p>
                        <p class="card-text my-0"><small class="text-muted">2018-12-25</small></p>
                    </div>
                    </div>
                </div>   
            </div>
                        <div class="col-6 col-sm-3 col-lg-2">
                <div class="card mb-3">
                    <img src="images/daisy-s-1375598.jpg" class="card-img-top" alt="images/daisy-s-1375598.jpg">
                    <div class="card-header p-1 d-flex justify-content-end">
                          
                               <button type="button" class="btn btn-outline-info btn-sm mr-1" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fas fa-info-circle"></i></button>
                        <button type="button" class="btn btn-outline-danger btn-sm mr-1" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash"></i></button>
                       
  
        
     
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
  <label class="btn btn-sm btn-outline-primary">
    <input type="checkbox" name="options" id="option1" autocomplete="off" checked> <i class="fas fa-check"></i>
  </label>
 
</div>
     
                    </div>
                    <div class="collapse" id="collapseExample">
                    <div class="card-body p-1">
                        <p class="card-title my-0"><small>images/daisy-s-1375598.jpg</small></p>
                        <p class="card-text my-0"><small class="text-muted">30kb</small></p>
                        <p class="card-text my-0"><small class="text-muted">2018-12-25</small></p>
                    </div>
                    </div>
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
        "dom": '<"container-fluid"<"row"<"col-6"l><"col-6"f>>><"container-fluid"<"row"<"col-12 px-0"rt>>><"container-fluid"<"row"<"col-6"i><"col-6"p>>>',

        "ajax": 'files.php',
        
       
  order: [[1, 'asc']],
  columns: [
            { 
            "orderable": false, 
            targets: 0, 
            cellType: 'div',
            className: 'col-12 col-sm-2 col-lg-1 colImage',
            render: function ( data, type, row, meta ) {return '<img data-src="'+data+'" class="img-fluid lazy" style="max-width:75px">';} },
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
            className: 'col-12 col-sm-3 col-md-2 col-lg-2 colActions',
            render: function ( data, type, row, meta ) {return '<button type="button" class="btn btn-outline-danger btn-sm mr-1" data-toggle="modal" data-target="#deleteModal" data-id="'+row[1]+'" data-option="delete" id="delSingle";"><i class="fas fa-trash"></i></button><div class="btn-group btn-group-toggle" data-toggle="buttons"><label class="btn btn-sm btn-outline-primary"><input type="checkbox" name="options" id="option1" autocomplete="off" checked=""> <i class="fas fa-check"></i></label></div>' }
            }
            
        ],
    "drawCallback": function(data){
        $("#imageTable").addClass("");
        $("thead").addClass("container-fluid");
        
        $("tr").addClass("row");
        $("tr .odd").addClass("my-3");
        $("tbody").addClass("container-fluid");
        
        
        
         $('img.lazy').lazy();
         
         
         $("th").remove();
         
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