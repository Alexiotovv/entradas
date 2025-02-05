
<?php include 'header.php';
?>
<?php 
$id=$_SESSION['id'];
?>



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

<?php

if(isset($_POST['btn_temporada']))

{
  $year = $_POST['year'];


        mysqli_query($con,"update temporada set year='$year' where id='1'")or die(mysqli_error());
}

?>

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
                  <!-- Date range -->

          </div>

                  <div class="box-header">
                  <h3 class="box-title"> MENU</h3>
                </div><!-- /.box-header -->
                <div class="box-body">








<style>
  .horizontal .redBar, .horizontal .greenBar, .horizontal .blueBar, .horizontal .otros {
    height:20px;
  }
  .horizontal.right td {
    float:right;
  }
 
  .vertical .redBar, .vertical .greenBar, .vertical .blueBar, .vertical .otros {
    width:150px;
  }
  .vertical.top td {
    vertical-align:top;
  }
  .vertical.bottom td {
    vertical-align:bottom;
  }
 
 #redBar, #greenBar, #blueBar {
    box-shadow: 2px 3px 5px #999;
    border-radius: 12px;
  }
  .redBar, .greenBar, .blueBar {
    box-shadow: 2px 3px 5px #999;
    border-radius: 12px;
  }
  .redBar {
    background-color:red;
  }
  .greenBar {
    background-color:green;
  }
  .blueBar {
    background-color:blue;
  }
</style>



                <div class="box-header with-border">
                  <h3 class="box-title"></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                 <?php
                      if ($tipo=="administrador" or $tipo=="empleado") {
                    
                      ?>           
       
  <?php
  //para administrador y admin
$c=0;
   $fechaActual = date('Y-m-d');

$fecha7days = date('Y-m-d', strtotime('-7 day')) ;


$fecha14days = date($fecha7days, strtotime('-14 day')) ;
$fecha1days = date('Y-m-d', strtotime('-1 day')) ;
$fecha30days = date('Y-m-d', strtotime('-30 day')) ;
$fecha60days = date($fecha30days, strtotime('-60 day')) ;
    $contador7dias=0;
      $contador14dias=0;
         $contador30dias=0;
      $contador60dias=0;
          $contador1dias=0;
                    $contador=0;
      $query=mysqli_query($con,"select * from entradas  where  fecha BETWEEN '$fecha7days' AND '$fechaActual' ")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
 $contador7dias++;
      }

      $query=mysqli_query($con,"select * from entradas  where  fecha BETWEEN '$fecha30days' AND '$fechaActual' ")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
 $contador30dias++;
      }
      $query=mysqli_query($con,"select * from entradas  where  fecha BETWEEN '$fecha60days' AND '$fecha30days' ")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
 $contador30dias++;
      }
            $query=mysqli_query($con,"select * from entradas  where  fecha BETWEEN '$fecha1days' AND '$fechaActual' ")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
 $contador1dias++;
      }
                  $query=mysqli_query($con,"select * from entradas  where  fecha='$fechaActual' ")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
 $contador++;
      }

      $query=mysqli_query($con,"select * from entradas  where  fecha BETWEEN '$fecha14days' AND '$fecha7days' ")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
 $contador14dias++;
      }



?>
   <table border=0 cellspacing=5 cellpadding=0 class="vertical bottom">
                       <tr>

  <div class = "row">
        <div class = "col-md-3 ">
              <div class="box-header">
                  <h3 class="box-title">COMPARACION 7 DIAS ANTERIORES</h3>
                </div>

</div>
  <div class = "col-md-3 ">
        <div class="box-header">
            <a class="btn btn-danger btn-print"    disabled="true" style=" font-size: 25px " role="button">CANTIDAD= <label style='color:black;  font-size: 25px '>=<?php echo $contador7dias;?></label></a>
   
                </div>

</div>
  <div class = "col-md-3 ">

        <div class="box-header">
                  <h3 class="box-title">COMPARACION 14 DIAS ANTERIORES</h3>
                </div>
</div>

    <div class = "col-md-3 ">
        <div class="box-header">

  <a class="btn btn-primary btn-print"    disabled="true" style=" font-size: 25px " role="button">CANTIDAD= <label style='color:black;  font-size: 25px '>=<?php echo $contador14dias;?></label></a>


                </div>

</div>
</div>

  <div class = "row">
        <div class = "col-md-3 ">
              <div class="box-header">
                  <h3 class="box-title">COMPARACION ESTE MES</h3>
                </div>

</div>
  <div class = "col-md-3 ">
        <div class="box-header">
            <a class="btn btn-dark btn-print"    disabled="true" style=" font-size: 25px " role="button">CANTIDAD= <label style='color:black;  font-size: 25px '>=<?php echo $contador30dias;?></label></a>
   
                </div>

</div>
  <div class = "col-md-3 ">

        <div class="box-header">
                  <h3 class="box-title">COMPARACION MES ANTERIOR</h3>
                </div>
</div>

    <div class = "col-md-3 ">
        <div class="box-header">

  <a class="btn btn-info btn-print"    disabled="true" style=" font-size: 25px " role="button">CANTIDAD= <label style='color:black;  font-size: 25px '>=<?php echo $contador60dias;?></label></a>


                </div>

</div>
</div>
  <div class = "row">
        <div class = "col-md-3 ">
              <div class="box-header">
                  <h3 class="box-title">COMPARACION HOY DIA</h3>
                </div>

</div>
  <div class = "col-md-3 ">
        <div class="box-header">
            <a class="btn btn-warning btn-print"    disabled="true" style=" font-size: 25px " role="button">CANTIDAD= <label style='color:black;  font-size: 25px '>=<?php echo $contador;?></label></a>
   
                </div>

</div>
  <div class = "col-md-3 ">

        <div class="box-header">
                  <h3 class="box-title">COMPARACION MES AYER</h3>
                </div>
</div>

    <div class = "col-md-3 ">
        <div class="box-header">

  <a class="btn btn-success btn-print"    disabled="true" style=" font-size: 25px " role="button">CANTIDAD= <label style='color:black;  font-size: 25px '>=<?php echo $contador1dias;?></label></a>


                </div>

</div>
</div>



  <?php
  //para administrador y admin


   $mes = date('Y-m-d');



$fecha14days = date($fecha7days, strtotime('-14 day')) ;
    $contador7dias=0;
      $contador14dias=0;
      $query=mysqli_query($con,"select * from entradas  where  fecha BETWEEN '$fecha7days' AND '$fechaActual' ")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
 $contador7dias++;
      }



      $query=mysqli_query($con,"select * from entradas  where  fecha BETWEEN '$fecha14days' AND '$fecha7days' ")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
 $contador14dias++;
      }
?>








                      </tr>

  <tr>

        <td>


      


    </td>
    <td>
      


      
    </td>

        <td>

      
    </td>
  </tr>
</table>


             <?php
                      }

                      //USUARIO COORDINADOR
                      ?>





                  </div><!--row-->
                  
      
  
   
            </div><!-- /.col (right) -->
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
          APSYSTEM <a href="#"></a>
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
