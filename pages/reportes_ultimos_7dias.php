
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

        <!-- page content -->
        <div class="right_col" role="main">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class = "x-panel">

            </div>

        </div><!--end of modal-dialog-->
 </div>


 <!--end of modal-->

                        <div class="box-body">
                  <!-- Date range -->  <section class="content-header">
             
          </section>

 <a class = "btn btn-success btn-print" href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Impresión</a>


                  <div class="box-header">
                  <h3 class="box-title"> ULTIMOS 7 DIAS</h3>
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
                 

                      </tr>
                    </thead>
                    <tbody>
                   




<?php


 $fechaActual = date('Y-m-d');

$fecha7days = date('Y-m-d', strtotime('-7 day')) ;

?>

   <?php
 
    $query=mysqli_query($con,"select * from entradas  where  fecha BETWEEN '$fecha7days' AND '$fechaActual'  ")or die(mysqli_error());
    $contador=0;
    while($row=mysqli_fetch_array($query)){
$contador++;
    }

?>

  <div class = "row">
        <div class = "col-md-4 col-lg-12 hide-section">
  <a class="btn btn-danger btn-print"    disabled="true" style="height:25%; width:50%; font-size: 25px " role="button">Nro ELEMENTOS= <label style='color:black;  font-size: 25px '>=<?php echo $contador;?></label></a>



</div>

      
</div>

 <?php







    $query=mysqli_query($con,"select * from entradas  where  fecha BETWEEN '$fecha7days' AND '$fechaActual' ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){

?>

                      <tr >
                         <td><?php echo $row['codigo'];?></td>
<td><?php echo $row['fecha'];?></td>
              <td><?php echo $row['hora_ingreso'];?></td>
<td><?php echo $row['hora_salida'];?></td>
<td><?php echo $row['cliente'];?></td>      
<td><?php echo $row['lugar'];?></td>  
                      </tr>

                                          <?php
                      }
                    
?>


 <!--end of modal-->

                    </tbody>
         








        <footer>

          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

  <?php include 'datatable_script.php';?>
    <!-- /gauge.js -->



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


                }

              );
              } );
    </script>
  </body>
</html>
