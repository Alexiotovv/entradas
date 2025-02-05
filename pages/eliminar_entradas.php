<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../dist/includes/dbcon.php');


          if(isset($_REQUEST['id_entrada']))
            {
              $id_entrada=$_REQUEST['id_entrada'];
            }
            else
            {
            $id_entrada=$_POST['id_entrada'];
          }



  mysqli_query($con,"delete from entradas where id_entrada='$id_entrada'")or die(mysqli_error());
    echo "<script type='text/javascript'>alert('Eliminado correctamente!');</script>";
  echo "<script>document.location='entradas.php'</script>";  
  
?>