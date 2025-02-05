<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;
$codigo=$_GET['codigo'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />

  <title>ENTRADA</title>

  <link rel='stylesheet' type='text/css' href='css/style.css' />
  <link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
  <script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
  <script type='text/javascript' src='js/example.js'></script>


<style>

.left{
    float: left;

}
.right{
    float: right;

}
.center{

   display:inline-block
}
@media print {
    .btn-print {
      display:none !important;
    size:30px;
    }

}
hr {
  height: 3px;
  width: 100%;
  background-color: black;
}
#abajo{
    height: 3px;
  width: 30%;
  background-color: black;
}
tr{
  font-family:'Helvetica','Verdana','Monaco',sans-serif;
  border:none; font-size: 15px;

}
#terminos{
    border:none; font-size: 8px;
}
</style>
</style>
</head>

<body>

  <?php
  include('../dist/includes/dbcon.php');


  ?>

  <?php


      $query=mysqli_query($con,"select * from entradas where codigo='$codigo' ")or die(mysqli_error($con));

          $row=mysqli_fetch_array($query);


 
//datos entradas

        $codigo=$row['codigo'];
          $fecha=$row['fecha'];
          $hora_ingreso=$row['hora_ingreso'];
   
          $cliente=$row['cliente'];
         
         $lugar=$row['lugar'];

 




  ?>


  <div id="page-wrap">

    <div class="container">


<br>
<br>
   <a class = "btn btn-success btn-print" href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Impresión</a>
                  <a class = "btn btn-primary btn-print" href = "entradas_agregar.php"><i class ="glyphicon glyphicon-arrow-left"></i>Volver a la página de inicio</a>
                  <center>
                  <h3>TICKET ENTRADA</h3>
                  </center>
              <hr style="color: black;" />

<center>            <table class="table table-bordered table-striped"  style="border:none;">
                    <thead>
                      <tr>


                        <th style="border:none;">codigo

                        </th>
                        <th style="border:none;">fecha</th>
                           <th style="border:none;">hora ingreso</th>
                               <th style="border:none;">cliente</th>
                                <th style="border:none;">lugar</th>
                        
                      
                      </tr>
                    </thead>
                    <tbody>
                          <tr >
             <tr style="border:none;  ">
                <td style="border:none; ">
                          <?php
    $query=mysqli_query($con,"select * from entradas where codigo='$codigo' ")or die(mysqli_error());
    $i=0;
    while($row=mysqli_fetch_array($query)){
    
  ?>
  
  <img src="barcode.php?text=<?php echo $row['codigo']; ?>&size=50&orientation=horizontal&codetype=Code39&print=true&sizefactor=1" />
  <?php } ?>

                  </td>
                <td style="border:none; "><?php echo $fecha;?></td>
                <td style="border:none; "><?php echo $hora_ingreso;?></td>  
                <td style="border:none; "><?php echo $cliente;?></td> 
                 <td style="border:none; "><?php echo $lugar;?></td>         
              </tr>
   
         
                 
                  
                 </tr> 
                   </tbody>

                  </table>    

</center>
                                         



  </div>




              
</body>

</html>
