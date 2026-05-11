<?php 
include_once(__DIR__ . "/../includes/header.php");
?>

<div class="midde_cont">
   <div class="container-fluid">

      <!-- TITULO -->
      <div class="row column_title">
         <div class="col-md-12">
            <div class="page_title d-flex justify-content-between align-items-center">
               <div>
                  <h2>
                     <i class="fa fa-users text-primary"></i>
                     Clientes
                  </h2>
                  <p class="text-muted mb-0">
                     Registro de Clientes - Sistema Veterinaria
                  </p>
               </div>
               <a href="clientes.php" class="btn btn-outline-secondary">
                  <i class="fa fa-arrow-left"></i>
                  Volver
               </a>
            </div>
         </div>
      </div>
      <!-- FORMULARIO -->
      <div class="row">
         <div class="col-md-12">
            <div class="white_shd full margin_bottom_30">
               <!-- HEADER -->
               <div class="full graph_head">
                  <div class="heading1 margin_0">
                     <h2>
                        <i class="fa fa-plus text-success"></i>
                        Nuevo Cliente
                     </h2>
                  </div>
               </div>
               <!-- BODY -->
               <div class="full padding_infor_info">
                  <form id="form_cliente">
                     <!-- DATOS PERSONALES -->
                     <div class="row">
                        <div class="col-md-12 mb-3">
                           <h5 class="text-primary">Datos del Cliente</h5>
                           <hr>
                        </div>
                        <!-- NOMBRE -->
                        <div class="col-md-4 mb-3">
                           <label>Nombre Completo<span class="text-danger">*</span></label>
                           <input type="text"class="form-control"id="nombre"maxlength="100"required>
                        </div>
                        <!-- DOCUMENTO -->
                        <div class="col-md-4 mb-3">
                           <label>Cédula / RUC</label>
                           <input type="text"class="form-control"id="documento"maxlength="20">
                        </div>
                        <!-- TELEFONO -->
                        <div class="col-md-4 mb-3">
                           <label>
                              Teléfono
                              <span class="text-danger">*</span>
                           </label>
                           <input type="text"class="form-control"id="telefono"maxlength="15"required>
                        </div>
                        <!-- EMAIL -->
                        <div class="col-md-6 mb-3">
                           <label>Email</label>
                           <input type="email"class="form-control"id="email">
                        </div>
                        <!-- DIRECCION -->
                        <div class="col-md-6 mb-3">
                           <label>Dirección</label>
                           <input type="text"class="form-control"id="direccion">
                        </div>
                        <!-- OBSERVACION -->
                        <div class="col-md-12 mb-3">
                           <label>Observaciones</label>
                           <textarea class="form-control"rows="3"id="observacion"></textarea>
                        </div>
                     </div>
                     <!-- ESTADO -->
                     <div class="row mt-2">
                        <div class="col-md-12 mb-3">
                           <h5 class="text-warning">
                              <i class="fa fa-cog"></i>
                              Estado
                           </h5>
                           <hr>
                        </div>
                        <div class="col-md-4 mb-3">
                           <label>Estado Cliente</label>
                           <select class="form-control" id="estado">
                              <option value="ACTIVO">ACTIVO</option>
                              <option value="INACTIVO">INACTIVO</option>
                           </select>
                        </div>
                     </div>
                     <!-- BOTONES -->
                     <div class="row mt-4">
                        <div class="col-md-12 text-end">
                           <button type="reset"class="btn btn-secondary">
                              <i class="fa fa-refresh"></i>
                              Limpiar
                           </button>
                           <button type="submit"class="btn btn-primary"id="btn_guardar">
                              <i class="fa fa-save"></i>
                              Guardar Cliente
                           </button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<script>
// SOLO NUMEROS TELEFONO
document.getElementById("telefono").addEventListener("keypress", function(e){
   if(!/[0-9]/.test(e.key)){
      e.preventDefault();
   }
});

// GUARDAR
document.getElementById("form_cliente").addEventListener("submit", function(e){

   e.preventDefault();
   let boton = document.getElementById("btn_guardar");
   boton.innerHTML = '<i class="fa fa-spinner fa-spin"></i> Guardando...';
   boton.disabled = true;

   setTimeout(() => {
      boton.innerHTML = '<i class="fa fa-check"></i> Guardado';
      boton.classList.remove("btn-primary");
      boton.classList.add("btn-success");
   }, 1500);

});

</script>

<?php
include_once '../includes/footer.php';
?>