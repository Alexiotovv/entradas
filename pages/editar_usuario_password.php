
<?php include 'header.php';

//$branch_id = $_GET['id'];
?>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../plugins/select2/select2.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php include 'main_sidebar.php';?>

        <!-- top navigation -->
       <?php include 'top_nav.php';?>      <!-- /top navigation -->
       <style>
label{

color: black;
}
li {
  color: white;
}
ul {
  color: white;
}
#buscar{
  text-align: right;
}
       </style>

        <!-- page content -->
        <div class="right_col" role="main">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class = "x-panel">

            </div>

        </div><!--end of modal-dialog-->
 </div>
 <!--end of modal-->
 <?php
$session_id=$_SESSION['id'];


?>
                        <div class="box-body">
                  <!-- Date range -->
                  <form method="post" action="actualizar_password.php" enctype="multipart/form-data" class="form-horizontal">
  <input type="hidden" class="form-control" id="id_usuario" name="id_usuario" value="<?php echo $session_id;?>" required>
      


<?php
//tienda
    $query=mysqli_query($con,"select * from usuario where ID='$session_id'")or die(mysqli_error());

    while($row=mysqli_fetch_array($query)){
    $usuario=$row['usuario'];

 }
?>

          
          <div class="col-lg-9">
            <label for="file">USUARIO</label>
    <input type="text" class="form-control" id="nametele" name="usuario" value="<?php echo $usuario;?>" readonly="readonly">
          </div>
     
         
          <div class="col-lg-9">
             <label  for="file">CONTRASEÑA</label>
                 <input type="password" class="form-control" id="nametele" name="password"  required>
          </div>
                    <div class="col-lg-9">
             <label  for="file">REPETIR CONTRASEÑA</label>
                 <input type="password" class="form-control" id="nametele" name="password2"  required>
          </div>
           <div class="col-lg-9">

                         <button type="submit" class="btn btn-primary">Guardar cambios</button>
                               
            
      </div>
          </form>
  
             </div>

                  <div class="box-header">
        
                </div><!-- /.box-header -->
 

            </div><!-- /.col -->


          </div><!-- /.row -->




                </div><!-- /.box-body -->

            </div>
        </div>
      </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Apsytem <a href="#"></a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

  <?php include 'datatable_script.php';?>



        <script>
        $(document).ready( function() {
                $('#example2').dataTable( {
                 "language": {
                   "paginate": {
                      "previous": "anterior",
                      "next": "posterior"
                    },
                    "search": "Buscar:",


                  },

                  "info": false,
                  "lengthChange": false,
                  "searching": false,


  "searching": true,
                }

              );
              } );
    </script>


    <!-- /gauge.js -->
  </body>
</html>
