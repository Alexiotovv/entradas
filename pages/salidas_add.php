<?php
session_start();
include('../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];

            $hora_salida =  date("h:i:s A");
          

     if(isset($_REQUEST['codigo']))
            {
              $codigo=$_REQUEST['codigo'];
            }
            else
            {
            $codigo=$_POST['codigo'];
          
}


	mysqli_query($con,"update entradas set hora_salida='$hora_salida' where codigo='$codigo'")or die(mysqli_error());

			
			echo "<script>document.location='generar_salida.php?codigo=$codigo'</script>";





?>
