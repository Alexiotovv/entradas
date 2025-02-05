
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

                <?php
                 //     if ($guardar=="si") {
                    
                      ?>


 <div class="container">
        
       </div>
                        <div class="box-body">
                  <!-- Date range -->
                  
                  <form method="post" action="filtrar_reporte.php" enctype="multipart/form-data" class="form-horizontal">
   <div class="form-group">
               
              
             
                          <div class = "row">
        <div class = "col-md-3 ">
              <div class="box-header">
                  <h3 class="box-title">Nombres y apellidos </h3>
                  <input type="checkbox" name="nombres" value="nombres" >
                </div>

</div>
  <div class = "col-md-3 ">
              <div class="box-header">
                  <h3 class="box-title">Cedula </h3>  
                    <input type="checkbox" name="cedula" value="cedula" >
                </div>

</div>
  <div class = "col-md-3 ">
              <div class="box-header">
                                   <h3 class="box-title">Telefono </h3>  
                    <input type="checkbox" name="telefono" value="telefono" >
                </div>

</div>
   <div class = "col-md-3 ">
<div class="box-header">
          <h3 class="box-title">Provincia </h3>  
                   <input type="checkbox" name="provincia" value="provincia" >
     </div>               
</div>    
</div>    



<div class = "row">
        <div class = "col-md-3 ">
              <div class="box-header">
                  <h3 class="box-title">Municipio </h3>
                  <input type="checkbox" name="municipio" value="municipio" >
                </div>

</div>
  <div class = "col-md-3 ">
              <div class="box-header">
                  <h3 class="box-title">Dm sector </h3>  
            <input type="checkbox" name="dm_sector" value="dm_sector" >
                </div>

</div>
  <div class = "col-md-3 ">
              <div class="box-header">
                                   <h3 class="box-title">Calle </h3>  
                    <input type="checkbox" name="calle" value="calle" >
                </div>

</div>
   <div class = "col-md-3 ">
<div class="box-header">
          <h3 class="box-title">Bloque </h3>  
                   <input type="checkbox" name="bloque" value="bloque" >
     </div>               
</div>    
</div>

<div class = "row">
        <div class = "col-md-3 ">
              <div class="box-header">
                  <h3 class="box-title">Centro voto  </h3>
             <input type="checkbox" name="centro_voto" value="centro_voto" >
                </div>

</div>
  <div class = "col-md-3 ">
              <div class="box-header">
                  <h3 class="box-title">Mesa </h3>  
           <input type="checkbox" name="mesa" value="mesa" >
                </div>

</div>
  <div class = "col-md-3 ">
              <div class="box-header">
                                   <h3 class="box-title">fecha </h3>  
                  <input type="checkbox" name="fecha" value="fecha" >
                </div>

</div>
   <div class = "col-md-3 ">
<div class="box-header">

     </div>               
</div>    
</div>
       </div>
                    <div class="col-md-12">
                       <div class="col-md-12">
                        <button class="btn btn-lg btn-primary btn-print" id="daterange-btn"  name="guardar">GENERAR FILTRO</button>

                         </div>

                    </div>

          </form>

          </div>
     
 <!--end of modal-->


                  <div class="box-header">

                </div><!-- /.box-header -->
                <div class="box-body">
                

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

              <?php 
// }
      # code...
    
?>
    <!-- /gauge.js -->
  </body>
</html>
