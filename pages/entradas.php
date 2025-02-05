
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
              <?php 
//    if ($docentes=="si") {
      # code...
    
?>
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


                  <div class="box-header">
                  <h3 class="box-title"> LISTA DE REGISTROS</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                
                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                      <tr>


                        
                          

                          <th> codigo </th>
                          <th> fecha </th>
                        <th> hora de ingreso </th>
                        <th> hora de salida </th>
                           <th> cliente </th>
                            <th> lugar </th>
                       <th class="btn-print"> Accion </th>

                      </tr>
                    </thead>
                    <tbody>
<?php
   // $branch=$_SESSION['branch'];
    $query=mysqli_query($con,"select * from entradas  ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){
    $id_entrada=$row['id_entrada'];
 
?>
                      <tr >
              <td><?php echo $row['codigo'];?></td>
<td><?php echo $row['fecha'];?></td>
              <td><?php echo $row['hora_ingreso'];?></td>
<td><?php echo $row['hora_salida'];?></td>
<td><?php echo $row['cliente'];?></td>      
<td><?php echo $row['lugar'];?></td> 
                        <td>
      

        <a class="small-box-footer btn-print"  href="<?php  echo "eliminar_entradas.php?id_entrada=$id_entrada";?>"><i class="glyphicon glyphicon-remove"></i></a>

        <a href="#updateordinance<?php echo $row['id_entrada'];?>" data-target="#updateordinance<?php echo $row['id_entrada'];?>" data-toggle="modal" style="color:#fff;" class="small-box-footer btn-print"><i class="glyphicon glyphicon-edit text-blue"></i></a>
            <?php
                  //    }
                      ?>

            </td>
                      </tr>
        <div id="updateordinance<?php echo $row['id_entrada'];?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content" style="height:auto">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">ACCION DETALLES ENTRADAS</h4>
              </div>
              <div class="modal-body">
        <form class="form-horizontal" method="post" action="entradas_actualizar.php" enctype='multipart/form-data'>

        <div class="form-group">
          <div class="col-lg-9">
            <input type="hidden" class="form-control" id="id_entrada" name="id_entrada" value="<?php echo $row['id_entrada'];?>" required>
          </div>
        </div>
               <div class="form-group">
          <label class="control-label col-lg-3" for="price">Fecha</label><br>
          <div class="col-lg-9">
            <input type="date" class="form-control" id="fecha" name="fecha" value="<?php echo $row['fecha'];?>"   required>
          </div>
        </div>
               <div class="form-group">
          <label class="control-label col-lg-3" for="price">Hora de salida</label><br>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="hora_ingreso" name="hora_ingreso" value="<?php echo $row['hora_ingreso'];?>"   required>
          </div>
        </div>
 <div class="form-group">
          <label class="control-label col-lg-3" for="price">Hora de ingreso</label><br>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="hora_salida" name="hora_salida" value="<?php echo $row['hora_salida'];?>"   required>
          </div>
        </div>
         <div class="form-group">
          <label class="control-label col-lg-3" for="price">Cliente</label><br>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="cliente" name="cliente" value="<?php echo $row['cliente'];?>"   required>
          </div>
        </div>
                 <div class="form-group">
          <label class="control-label col-lg-3" for="price">Lugar</label><br>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="lugar" name="lugar" value="<?php echo $row['lugar'];?>"   >
          </div>
        </div>

              <div class="modal-footer">
    <button type="submit" class="btn btn-primary">GUARDAR</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button>
              </div>
        </form>
            </div>

        </div><!--end of modal-dialog-->
 </div>
 <!--end of modal-->

<?php $i++;}?>
                    </tbody>

                  </table>
                </div><!-- /.box-body -->

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
            SISTEMA DE GASTOS <a href="#"></a>
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



              <?php 
// }
      # code...
    
?>
    <!-- /gauge.js -->
  </body>
</html>
