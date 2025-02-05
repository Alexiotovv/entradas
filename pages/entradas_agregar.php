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
                    <h3 class="box-title"> REGISTRAR ENTRADAS </h3>

                </div><!-- /.box-header -->


                <div class="box-body">


                    <?php
            $fechaactual = date('Y-m-d');
            ?>






                    <form class="form-horizontal" method="post" action="entradas_add.php" enctype='multipart/form-data'>






                        <?php
                          $year = date("Y");
                          $cont=0;
                          $id_entrada=0;
                          $query3=mysqli_query($con,"select * from entradas ")or die(mysqli_error());

                          while($row3=mysqli_fetch_array($query3)){
                            $id_entrada=$row3['id_entrada'];
                          }
                          $mes=date("m");
                          $dia=date("d");
                          $cont=$id_entrada+1;
                          $codigo=$year.$mes.$dia.$cont;
                        ?>

                        <div class="row">
                            <div class="col-md-3 btn-print">
                                <div class="form-group">
                                    <label for="date">Nombre cliente</label>

                                </div><!-- /.form group -->
                            </div>
                            <div class="col-md-4 btn-print">
                                <div class="form-group">

                                    <input type="text" class="form-control pull-right" id="cliente" name="cliente"
                                        placeholder="Escribe el nombre del cliente" required>
                                </div>
                            </div>
                            <div class="col-md-4 btn-print">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 btn-print">
                                <div class="form-group">
                                    <label for="date">Lugar</label>

                                </div><!-- /.form group -->
                            </div>
                            <div class="col-md-4 btn-print">
                                <div class="form-group">

                                    <input type="text" class="form-control pull-right" id="lugar" name="lugar"
                                        placeholder="Escribe el lugar">
                                </div>
                            </div>
                            <div class="col-md-4 btn-print">

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3 btn-print">
                                <div class="form-group">
                                    <label for="date">Codigo</label>

                                </div><!-- /.form group -->
                            </div>
                            <div class="col-md-4 btn-print">
                                <div class="form-group">

                                    <input type="text" class="form-control pull-right" id="codigo" name="codigo"
                                        value="<?php echo $codigo;?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-4 btn-print">

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3 btn-print">
                                <div class="form-group">
                                    <label for="date">Fecha</label>

                                </div><!-- /.form group -->
                            </div>
                            <div class="col-md-4 btn-print">
                                <div class="form-group">
                                    <input type="text" class="form-control pull-right" id="fecha" name="fecha"
                                        value="<?php echo $fechaactual;?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-4 btn-print">

                            </div>
                        </div>
                        <?php



            $hora_entrada = date("h:i:s A"); // "A" agrega AM o PM

// minutos con ceros iniciales
            ?>

                        <div class="row">

                            <div class="col-md-3 btn-print">
                                <div class="form-group">
                                    <label for="date">Hora ingreso</label>

                                </div><!-- /.form group -->
                            </div>
                            <div class="col-md-4 btn-print">
                                <div class="form-group">
                                    <input type="text" class="form-control pull-right" id="hora_ingreso"
                                        name="hora_ingreso" value="<?php echo $hora_entrada;?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-4 btn-print">

                            </div>
                        </div>





                        <!-- Botones de Tiempo -->
                        <div class="row">
                            <div class="col-md-3 btn-print">
                                <div class="form-group">
                                    <label for="tiempo_estadia">Tiempo de estadía</label>
                                </div>
                            </div>
                            <div class="col-md-6 btn-print">
                                <div class="form-group">
                                    <button type="button" class="btn btn-info tiempo-btn" data-minutos="10">10
                                        min</button>
                                    <button type="button" class="btn btn-info tiempo-btn" data-minutos="30">30
                                        min</button>
                                    <button type="button" class="btn btn-info tiempo-btn" data-minutos="60">1
                                        hora</button>
                                    <button type="button" class="btn btn-info tiempo-btn" data-minutos="120">2
                                    horas</button>
                                    <button type="button" class="btn btn-warning tiempo-btn"
                                        data-minutos="libre">Libre</button>
                                </div>
                            </div>
                        </div>

                        <!-- Hora de Salida (Visible y Oculta) -->
                        <div class="row">
                            <div class="col-md-3 btn-print">
                                <div class="form-group">
                                    <label for="hora_salida_visible">Hora de Salida Programada</label>
                                </div>
                            </div>
                            <div class="col-md-4 btn-print">
                                <div class="form-group">
                                    <!-- Input visible -->
                                    <input type="text" class="form-control pull-right" id="hora_salida_visible"
                                        readonly required>
                                    <!-- Input oculto para envío al backend -->
                                    <input type="hidden" id="hora_salida" name="hora_salida_programada">
                                </div>
                            </div>
                        </div>

                        <!-- Campo Oculto para Guardar Tiempo Seleccionado -->
                        <input type="hidden" name="tiempo_seleccionado" id="tiempo_seleccionado">

                        <button type="submit" name="horizonal" class="btn btn-primary">Imprimir horizonal</button>
                        <button type="submit" name="vertical" class="btn btn-primary">Imprimir vertizal</button>

                        <div class="modal-footer">


                        </div>
                    </form>


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
            Sistema de appsystem <a href="#"></a>
        </div>
        <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
    </div>
    </div>

    <?php include 'datatable_script.php';?>



    <!-- Incluye jQuery y Moment.js -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>

    <script>
    $(document).ready(function() {
        console.log("DOM Cargado. Script en ejecución.");

        $(".tiempo-btn").click(function() {
            let minutos = $(this).data("minutos"); // Obtener minutos del botón
            let horaIngreso = $("#hora_ingreso").val()
                .trim(); // Obtener la hora de ingreso desde el input

            if (!horaIngreso) {
                alert("Primero ingrese la hora de ingreso.");
                return;
            }

            let $horaSalida = $("#hora_salida");
            let $horaSalidaVisible = $("#hora_salida_visible");
            let $tiempoSeleccionado = $("#tiempo_seleccionado");

            if (minutos === "libre") {
                $horaSalida.val("Libre");
                $horaSalidaVisible.val("Libre");
                $tiempoSeleccionado.val("libre");
                return;
            }

            minutos = parseInt(minutos);
            let horaIngresoMoment = moment(horaIngreso, "hh:mm:ss A"); // Formato AM/PM

            if (!horaIngresoMoment.isValid()) {
                alert("Formato de hora inválido. Use hh:mm:ss A");
                console.error("Hora inválida:", horaIngreso);
                return;
            }

            // Sumar los minutos a la hora de ingreso
            let horaSalidaMoment = horaIngresoMoment.add(minutos, "minutes");

            // Mostrar la nueva hora en formato 24 horas para los cálculos
            let horaSalidaFormato24 = horaSalidaMoment.format("hh:mm:ss A");

            // Mostrar la nueva hora en formato AM/PM para el input visible
            let horaSalidaFormatoAMPM = horaSalidaMoment.format("hh:mm:ss A");

            // Actualizar los inputs
            $horaSalida.val(horaSalidaFormatoAMPM); // Guardar en formato 24 horas
            $horaSalidaVisible.val(horaSalidaFormatoAMPM); // Mostrar en formato AM/PM
            $tiempoSeleccionado.val(minutos);
        });
    });
    </script>


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
                "info": false,
                "lengthChange": false,
                "searching": false,
                "searching": true,
            }
        );
    });
    </script>

    <!-- /gauge.js -->
</body>

</html>