


<?php session_start();
if(empty($_SESSION['id'])):
endif;
include('../dist/includes/dbcon.php');

		$id_entrada = $_POST['id_entrada'];

	$fecha = $_POST['fecha'];
	$hora_ingreso = $_POST['hora_ingreso'];
	$hora_salida = $_POST['hora_salida'];
	$cliente = $_POST['cliente'];

	$lugar = $_POST['lugar'];
	# code...



	
	



	mysqli_query($con,"update entradas set fecha='$fecha',hora_ingreso='$hora_ingreso',hora_salida='$hora_salida',cliente='$cliente',lugar='$lugar' where id_entrada='$id_entrada'")or die(mysqli_error());

	echo "<script type='text/javascript'>alert(' actualizado correctamente!');</script>";
	echo "<script>document.location='entradas.php'</script>";			
	

	


?>
