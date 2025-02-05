<?php 
$id=$_SESSION['id'];
?>

<?php

?>
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3><?php echo $empresa;?></h3>
                <ul class="nav side-menu">
                      <li><a href = "inicio.php"><i class="fa fa-building"></i> inicio <span class="fa fa-chevron-right"></span></a></li>
                      <li class=""><a target="_blank" href="https://www.youtube.com/c/tusolutionwebTutos"><i class="fa fa-youtube-play"></i> <span>canal de youtube</span></a></li>
                        <li class=""><a target="_blank" href="https://api.whatsapp.com/send/?phone=51915960610"><i class="fa fa-commenting-o"></i> <span>whatsap</span></a></li>
                                  <li class=""><a target="_blank" href="https://ventadecodigofuente.com/"><i class="fa fa-commenting-o"></i> <span>Pagina web desarrollador</span></a></li>

                                  <?php
                      if ($tipo=="administrador" ) {
                    
                      ?>
                 <li><a><i class="fa fa-group"></i> Usuarios<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">

                      <li><a href="usuario.php">Usuarios</a></li>

                       

                    </ul>
                  </li>
             <?php
                      }
                      ?>


                                  <?php
                 //     }
                      ?>

                      



          <?php
                      if ($tipo=="administrador" or $tipo=="empleado") {
                    
                      ?>


                               <li><a href = "entradas_agregar.php"><i class="fa fa-clock-o"></i>Registrar entradas<span class="fa fa-chevron-right"></span></li></a>
                                    <?php
                      }
                      ?>

       
          
          <?php
                      if ($tipo=="administrador" or $tipo=="empleado") {
                    
                      ?>
           
           <li><a href = "salidas_agregar.php"><i class="fa fa-plane"></i>Registrar salidas<span class="fa fa-chevron-right"></span></a>
            <?php
                      }
                      ?>
   
          <?php
                      if ($tipo=="administrador" ) {
                    
                      ?>
           
           <li><a href = "entradas.php"><i class="fa fa-database"></i>Editar datos <span class="fa fa-chevron-right"></span></a>
            <?php
                      }
                      ?>




                                                          <?php
                      if ($tipo=="administrador" ) {
                    
                      ?>

                 <li><a><i class="fa fa-envelope"></i> Reportes <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">

                      <li><a href="reportes_por_fecha.php">Entre fechas</a></li>
                      <li><a href="reportes_por_dia.php">Por dia</a></li> 
              
      <li><a href="reportes_ultimos_7dias.php">Ultimos 7 dias</a></li> 
                    </ul>
                  </li>
             <?php
                      }
                      ?>
                 <li><a><i class="fa fa-gear"></i>Configuracion<span class="fa fa-chevron-s"></span></a>
                    <ul class="nav child_menu">


                      <li><a href="editar_usuario_password.php">Cambiar Contraseña</a></li>
                                                                        <?php
                      if ($tipo=="administrador" ) {
                    
                      ?>
                          <li><a href="configuracion.php">Configuracion</a></li>
                                 <?php
                      }
                      ?>

                    </ul>
                  </li>

              </div>
             <!--- <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="e_commerce.html">E-commerce</a></li>
                      <li><a href="projects.html">Projects</a></li>
                      <li><a href="project_detail.html">Project Detail</a></li>
                      <li><a href="contacts.html">Contacts</a></li>
                      <li><a href="profile.html">Profile</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="page_403.html">403 Error</a></li>
                      <li><a href="page_404.html">404 Error</a></li>
                      <li><a href="page_500.html">500 Error</a></li>
                      <li><a href="plain_page.html">Plain Page</a></li>
                      <li><a href="login.html">Login Page</a></li>
                      <li><a href="pricing_tables.html">Pricing Tables</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#level1_1">Level One</a>
                        <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="level2.html">Level Two</a>
                            </li>
                            <li><a href="#level2_1">Level Two</a>
                            </li>
                            <li><a href="#level2_2">Level Two</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href="#level1_2">Level One</a>
                        </li>
                    </ul>
                  </li>
                  <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                </ul>
              </div>--->

            </div>
