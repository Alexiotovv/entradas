<?php
session_start();
include('../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];
	$codigo = $_POST['codigo'];
	$fecha = $_POST['fecha'];
	$hora_ingreso = $_POST['hora_ingreso'];
	$hora_salida_programada = $_POST['hora_salida_programada'];
	$tiempo_seleccionado = $_POST['tiempo_seleccionado'];
	$cliente = $_POST['cliente'];
	$lugar = $_POST['lugar'];


		$total = 0;

		

	$query2=mysqli_query($con,"select * from entradas where codigo='$codigo'")or die(mysqli_error($con));
		$count=mysqli_num_rows($query2);

		if ($count>0)
		{
			echo "<script type='text/javascript'>alert('codigo entrada ya existe!');</script>";
			echo "<script>document.location='entradas_agregar.php'</script>";
		}
		else
		{

			if ($tiempo_seleccionado =='10') {
				$tiempo_seleccionado='10 min';
			}else if($tiempo_seleccionado =='30'){
				$tiempo_seleccionado='30 min';
			}else if($tiempo_seleccionado =='60'){
				$tiempo_seleccionado='1 hora';
			}else if($tiempo_seleccionado =='120'){
				$tiempo_seleccionado='2 horas';
			}else if($tiempo_seleccionado =='Libre'){
				$tiempo_seleccionado='';
			}


			mysqli_query($con,"INSERT INTO entradas(codigo,fecha,hora_ingreso,hora_salida,hora_salida_programada,tiempo_seleccionado,cliente,lugar)
				VALUES('$codigo','$fecha','$hora_ingreso','','$hora_salida_programada','$tiempo_seleccionado','$cliente','$lugar')")or die(mysqli_error($con));

			if(isset($_POST['horizonal']))

{
			echo "<script>document.location='generar_entrada.php?codigo=$codigo'</script>";
}
			if(isset($_POST['vertical']))

{
			echo "<script>document.location='generar_entrada_vertical.php?codigo=$codigo'</script>";
}

}




?>