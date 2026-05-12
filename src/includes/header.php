<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- site metas -->
      <title>Pluto - Responsive Bootstrap Admin Panel Templates</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="../../images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="../css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="../css/style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="../css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="../css/color_2.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="../css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="../css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="../css/custom.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="index.html"><img class="logo_icon img-responsive" src="../../images/logo/logo_icon.png" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="../../images/layout_img/animal-pet.jpg" alt="#" /></div>
                        <div class="user_info">
                           <h6>Nombre de la Veterinaria</h6>
                           <!-- <p><span class="online_animation"></span> Online</p> -->
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>General</h4>
                  <ul class="list-unstyled components">
                     <li>
                        <a href="#clinica" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-diamond purple_color"></i> <span>Clinica(servicios)</span></a>
                        <ul class="collapse list-unstyled" id="clinica">
                           <li><a href="clientes.php"> <span>Clientes</span></a></li>
                           <li><a href="mascotas.php"> <span>Mascotas</span></a></li>
                           <li><a href="icons.html"> <span>Consultas</span></a></li>
                           <li><a href="invoice.html"> <span>Historial clinico</span></a></li>
                           <li><a href="invoice.html"> <span>Vacunas</span></a></li>
                           <li><a href="invoice.html"> <span>Cirugias</span></a></li>
                           <li><a href="invoice.html"> <span>Estudios</span></a></li><!--Labotarios,imagenes -->
                        </ul>
                     </li>
                     <li>
                        <a href="#comercial" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-diamond purple_color"></i> <span>Comercial</span></a>
                        <ul class="collapse list-unstyled" id="comercial">
                           <li><a href="productos.php"> <span>Productos</span></a></li>
                           <li><a href="categorias.php"> <span>Categorías</span></a></li>
                           <li><a href="stock.php"> <span>Stock</span></a></li>
                           <li><a href="invoice.html"> <span>Compras a proveedores</span></a></li>
                           <li><a href="invoice.html"> <span>Ventas</span></a></li> <!--tipo factura/ticket-->
                        </ul>
                     </li>
                     <li>
                        <a href="#administracion" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-cog yellow_color"></i> <span>Administración</span></a>
                        <ul class="collapse list-unstyled" id="administracion">
                           <li><a href="general_elements.html"> <span>Usuarios</span></a></li>
                           <li><a href="media_gallery.html"> <span>Roles</span></a></li>
                        </ul>
                     </li>
                     <li><a href="tables.html"><i class="fa fa-table purple_color2"></i> <span>Ventas</span></a></li>
                     <li>
                        <a href="contact.html">
                        <i class="fa fa-paper-plane red_color"></i> <span>Contacto Mascotas</span></a>
                     </li>
                     <li class="active">
                        <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i> <span>Descriptivos</span></a>
                        <ul class="collapse list-unstyled" id="additional_page">
                           <li>
                              <a href="profile.html">> <span>Departamento</span></a>
                           </li>
                           <li>
                              <a href="project.html">> <span>Ciudad</span></a>
                           </li>
                           <li>
                              <a href="login.html">> <span>Barrio</span></a>
                           </li>
                           <li>
                              <a href="404_error.html">> <span>Ubicacion</span></a>
                           </li>
                        </ul>
                     </li>
                     <li><a href="map.html"><i class="fa fa-map purple_color2"></i> <span>Ubicacion</span></a></li>
                     <li><a href="settings.html"><i class="fa fa-cog yellow_color"></i> <span>Configuracion</span></a></li>
                  </ul>
               </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <div class="logo_section">
                           <a href="index.html"><img class="img-responsive" src="../../images/logo/logo.png" alt="#" /></a>
                        </div>
                        <div class="right_topbar">
                           <div class="icon_info">
                              <!-- <ul>
                                 <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                                 <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                 <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                              </ul> -->
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="../../images/layout_img/user_img.jpg" alt="#" /><span class="name_user">John David</span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="profile.html">My Profile</a>
                                       <a class="dropdown-item" href="settings.html">Settings</a>
                                       <a class="dropdown-item" href="help.html">Help</a>
                                       <a class="dropdown-item" href="#"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
               <!-- end topbar -->


               