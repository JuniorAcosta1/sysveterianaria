<!DOCTYPE html>
<html lang="es">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">

      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- site metas -->
      <title>Login</title>
      <!-- site icon -->
      <link rel="icon" href="../../images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="../css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="../css/style.css" />
      <link rel="stylesheet" href="../css/responsive.css" />
      <link rel="stylesheet" href="../css/colors.css" />
      <link rel="stylesheet" href="../css/bootstrap-select.css" />
      <link rel="stylesheet" href="../css/perfect-scrollbar.css" />
      <link rel="stylesheet" href="../css/custom.css" />

      <!-- font awesome -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <style>
         .error-text{
            color:red;
            font-size:12px;
            margin-top:5px;
         }
         .input-error{
            border:1px solid red !important;
         }
         .password-box{
            position:relative;
         }
         .password-box i{
            position:absolute;
            right:15px;
            top:14px;
            cursor:pointer;
            color:#999;
         }
         .field{
            position:relative;
         }

         .error-text{
            color:red;
            font-size:12px;
            margin-left:180px;
            margin-top:3px;
         }
      </style>

   </head>

   <body class="inner_page login">

      <div class="full_container">
         <div class="container">
            <div class="center verticle_center full_height">

               <div class="login_section">

                  <div class="logo_login">
                     <div class="center">
                        <img width="210" src="../../images/logo/logo.png" alt="#" />
                     </div>
                  </div>
                  <div class="login_form">
                     <form id="loginForm">
                        <fieldset>
                           <!-- usuario -->
                           <div class="field">
                              <label class="label_field">Usuario</label>
                              <input type="text" id="usuario"name="usuario" placeholder="Ingresar usuario"/>
                              <div id="errorUsuario" class="error-text"></div>
                           </div>
                           <!-- password -->
                           <div class="field">
                              <div class="password-box">
                                 <label class="label_field">Contraseña</label>
                                    <input type="password" id="password"name="password" placeholder="Ingresar contraseña"/>
                                       <i class="fa fa-eye" id="togglePassword"></i>
                              </div>
                              <div id="errorPassword" class="error-text"></div>
                           </div>
                           <br>
                           <br>
                           <div class="field margin_0 d-flex justify-content-center">
                              <button type="submit" class="main_bt">
                                 Ingresar al sistema
                              </button>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="../js/popper.min.js"></script>
      <script src="../js/bootstrap.min.js"></script>
      <script src="../js/jquery.min.js"></script>
      <!-- wow animation -->
      <script src="../js/animate.js"></script>
      <!-- select country -->
      <script src="../js/bootstrap-select.js"></script>
      <!-- nice scrollbar -->
      <script src="../js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="../src/js/custom.js"></script>
<script>
   // MOSTRAR PASSWORD
   const togglePassword = document.getElementById("togglePassword");
   const password = document.getElementById("password");
   togglePassword.addEventListener("click", function () {
      const type = password.type === "password" ? "text" : "password";
      password.type = type;
      this.classList.toggle("fa-eye");
      this.classList.toggle("fa-eye-slash");
   });
   // INPUTS
   let usuario = document.getElementById("usuario");
   let errorUsuario = document.getElementById("errorUsuario");
   let passwordInput = document.getElementById("password");
   let errorPassword = document.getElementById("errorPassword");
   // VALIDAR EN TIEMPO REAL USUARIO
   usuario.addEventListener("input", function(){
      if(usuario.value.trim() !== ""){
         usuario.classList.remove("input-error");
         usuario.style.border = "1px solid green";
         errorUsuario.style.color = "green";
         errorUsuario.innerHTML = "Correcto";
      }else{
         usuario.classList.add("input-error");
         errorUsuario.style.color = "red";
         errorUsuario.innerHTML = "Ingrese el usuario";
      }
   });
   // BLOQUEAR ESPACIOS EN USUARIO Y PASSWORD
   usuario.addEventListener("keypress", function(e){
      if(e.key === " "){
         e.preventDefault();
      }
   });
   passwordInput.addEventListener("keypress", function(e){
      if(e.key === " "){
         e.preventDefault();
      }
   });


   // VALIDAR EN TIEMPO REAL PASSWORD
   passwordInput.addEventListener("input", function(){
      if(passwordInput.value.length >= 4){
         passwordInput.classList.remove("input-error");
         passwordInput.style.border = "1px solid green";
         errorPassword.style.color = "green";
         errorPassword.innerHTML = "Correcto";
      }else{
         passwordInput.classList.add("input-error");
         errorPassword.style.color = "red";
         errorPassword.innerHTML = "Ingrese la contraseña";
      }
   });
   // VALIDACION FORMULARIO
   document.getElementById("loginForm").addEventListener("submit", function(e){
      e.preventDefault();
      // limpiar
      errorUsuario.innerHTML = "";
      errorPassword.innerHTML = "";
      usuario.classList.remove("input-error");
      passwordInput.classList.remove("input-error");
      let valido = true;
      // usuario
      if(usuario.value.trim() == ""){
         usuario.classList.add("input-error");
         errorUsuario.style.color = "red";
         errorUsuario.innerHTML = "Ingrese el usuario";
         valido = false;
      }
      // password
      if(passwordInput.value.trim() == ""){
         passwordInput.classList.add("input-error");
         errorPassword.style.color = "red";
         errorPassword.innerHTML = "Ingrese la contraseña";
         valido = false;
      }else if(passwordInput.value.length < 4){
         passwordInput.classList.add("input-error");
         errorPassword.style.color = "red";
         errorPassword.innerHTML = "Mínimo 4 caracteres";
         valido = false;
      }

      if(valido){
         // BOTON LOADING
         let boton = document.querySelector(".main_bt");
         boton.innerHTML = '<i class="fa fa-spinner fa-spin"></i> Ingresando...';
         boton.disabled = true;
         // SIMULAR ENVIO
            setTimeout(function(){
               alert("Login correcto");
               // this.submit();
               boton.innerHTML = 'Ingresar al sistema';
               boton.disabled = false;
            },2000);
      }
      });

</script>

   </body>
</html>