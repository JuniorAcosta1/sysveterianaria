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
                     <i class="fa fa-shopping-cart text-primary"></i>
                     Categorias
                  </h2>
                  <p class="text-muted mb-0">
                     Registro de Categorias - Sistema Veterinaria
                  </p>
               </div>
               <a href="categorias.php" class="btn btn-outline-secondary">
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
                        Nueva Categoria
                     </h2>
                  </div>
               </div>
               <div class="full padding_infor_info">
                  <form id="form_categoria">
                     <!-- DATOS PERSONALES -->
                     <div class="row">
                        <div class="col-md-12 mb-3">
                           <h5 class="text-primary">Datos de la Categoria</h5>
                           <hr>
                        </div>
                        <!-- NOMBRE -->
                        <div class="col-md-4 mb-3">
                           <label>Nombre<span class="text-danger">*</span></label>
                           <input type="text"class="form-control" maxlength="100"required>
                        </div>
                        <!-- DESCRIPCION -->
                        <div class="col-md-12 mb-3">
                           <label>Descripción</label>
                           <textarea class="form-control"rows="3"id="descripcion"></textarea>
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
                              Guardar Categoria
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

// GUARDAR
document.getElementById("form_categoria").addEventListener("submit", function(e){

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