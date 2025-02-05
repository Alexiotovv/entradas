<?php include 'header.php';


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
            <?php include 'top_nav.php';?>
            <!-- /top navigation -->
            <style>
            label {

                color: black;
            }

            li {
                color: white;
            }

            ul {
                color: white;
            }

            #buscar {
                text-align: right;
            }
            </style>

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x-panel">

                        </div>

                    </div>
                    <!--end of modal-dialog-->
                </div>


                <div class="panel-heading">


                </div>

                <!--end of modal-->


                <div class="box-header">
                    <h3 class="box-title"> </h3>

                </div><!-- /.box-header -->
                <a class="btn btn-success btn-print" href="" onclick="window.print()"><i
                        class="glyphicon glyphicon-print"></i> Impresión</a>



                <div class="box-body">
                    <!--end of modal-->


                    <form>
                        Busqueda: <input id="txtBusqueda" type="text" onkeyup="Buscar();" />

                    </form>

                    <div class="box-header">
                        <h3 class="box-title"> LISTA DE REGISTROS</h3>
                    </div><!-- /.box-header -->



                    <div class="box-body">

                        <table ID="example22" class="table table-bordered table-striped">
                            <thead>
                                <tr>

                                    <th>id</th>
                                    <th>codigo</th>
                                    <th>fecha</th>
                                    <th>hora ingreso</th>
                                    <th>hora salida</th>
                                    <th>hora salida programada</th>
                                    <th>tiempo</th>
                                    <th>cliente</th>
                                    <th>lugar</th>
                                    <th class="btn-print"> Accion </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
   // $branch=$_SESSION['branch'];
       
            $fechaactual = date('Y-m-d');
            
    $query=mysqli_query($con,"select * from entradas ORDER BY id_entrada DESC;")or die(mysqli_error());
    $i=0;
    while($row=mysqli_fetch_array($query)){
     $codigo=$row['codigo'];

?>
                                <tr>

                                    <td><?php echo $row['id_entrada'];?></td>


                                    <td><?php echo $row['codigo'];?></td>
                                    <td><?php echo $row['fecha'];?></td>
                                    <td><?php echo $row['hora_ingreso'];?></td>
                                    <td><?php echo $row['hora_salida'];?></td>
                                    <td><?php echo $row['hora_salida_programada'];?></td>
                                    <td><?php echo $row['tiempo_seleccionado'];?></td>
                                    <td><?php echo $row['cliente'];?></td>
                                    <td><?php echo $row['lugar'];?></td>
                                    <td>
                                        <?php
                   
               if ($row['hora_salida']=='') {
                      # code...
                  
                      ?>

                                        <a class="btn btn-danger btn-print"
                                            href="<?php  echo "salidas_add.php?codigo=$codigo";?>" role="button">GENERAR
                                            HORIZONTAL</a>
                                        <a class="btn btn-warning btn-print"
                                            href="<?php  echo "salidas_add_vertical.php?codigo=$codigo";?>"
                                            role="button">GENERAR VERTICAL</a>
                                        <?php
              }  
                      ?>

                                    </td>
                                </tr>

                                <!--end of modal-->

                                <?php }?>
                            </tbody>

                        </table>
                        <script type="text/javascript">
                        // < ![CDATA[
                        function Eliminar(i) {
                            document.getElementsByTagName("table")[0].setAttribute("id", "tableid");
                            document.getElementById("tableid").deleteRow(i);
                        }

                        function Buscar() {
                            var tabla = document.getElementById('example22');
                            var busqueda = document.getElementById('txtBusqueda').value.toLowerCase();
                            var cellsOfRow = "";
                            var found = false;
                            var compareWith = "";
                            for (var i = 1; i < tabla.rows.length; i++) {
                                cellsOfRow = tabla.rows[i].getElementsByTagName('td');
                                found = false;
                                for (var j = 0; j < cellsOfRow.length && !found; j++) {
                                    compareWith = cellsOfRow[j].innerHTML.toLowerCase();
                                    if (busqueda.length == 0 || (compareWith.indexOf(busqueda) > -1)) {
                                        found = true;
                                    }
                                }
                                if (found) {
                                    tabla.rows[i].style.display = '';
                                } else {
                                    tabla.rows[i].style.display = 'none';
                                }
                            }
                        }
                        // ]]>
                        </script>
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
    $(document).ready(function() {
        $('#example2').dataTable({
                "language": {
                    "paginate": {
                        "previous": "anterior",
                        "next": "posterior"
                    },
                    "search": "Buscar:",


                },
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],


                "searching": true,
            }

        );
    });
    </script>




    <!-- /gauge.js -->
</body>

</html>