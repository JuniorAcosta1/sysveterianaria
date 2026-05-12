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
                     Productos
                  </h2>
                  <p class="text-muted mb-0">
                     Registro de Productos - Sistema Veterinaria
                  </p>
               </div>
               <a href="productos.php" class="btn btn-outline-secondary">
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
                        Nuevo Producto
                     </h2>
                  </div>
               </div>
               <div class="full padding_infor_info">
                  <form id="form_producto">
                     <!-- DATOS PERSONALES -->
                     <div class="row">
                        <div class="col-md-12 mb-3">
                           <h5 class="text-primary">Datos del Producto</h5>
                           <hr>
                        </div>
                        <!-- NOMBRE -->
                        <div class="col-md-4 mb-3">
                           <label>Nombre<span class="text-danger">*</span></label>
                           <input type="text"class="form-control"id="nombre"maxlength="100"required>
                        </div>
                        <!-- PRECIO -->
                        <div class="col-md-4 mb-3">
                           <label>
                              Precio
                              <span class="text-danger">*</span>
                           </label>
                           <input type="text"class="form-control"id="precio"placeholder="Gs. 0"autocomplete="off"required>
                        </div>
                        <!-- MONTO EN LETRAS -->
                        <div class="col-md-8 mb-3">
                           <label>Monto en Letras</label>
                           <input type="text"class="form-control bg-light"id="precio_letras"readonly>
                        </div>
                        <!-- CATEGORIA -->
                        <div class="col-md-4 mb-3">
                           <label>Categoría<span class="text-danger">*</span></label>
                           <select class="form-control"id="categoria"required>
                              <option value="">Seleccionar</option>
                              <option>Primavera</option>
                              <option>Verano</option>
                              <option>Otro</option>
                           </select>
                        </div>
                        <!-- DESCRIPCION -->
                        <div class="col-md-12 mb-3">
                           <label>Descripción</label>
                           <textarea class="form-control"rows="3"id="descripcion"></textarea>
                        </div>
                     </div>
                     <!-- IMAGEN -->
                     <div class="row mt-2">
                        <div class="col-md-12 mb-3">
                           <h5 class="text-warning">
                              <i class="fa fa-image"></i>Imagen
                           </h5>
                           <hr>
                        </div>
                        <div class="col-md-12 mb-3">
                           <label>Imagen</label>
                           <input type="file"class="form-control"id="imagen">
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
                              Guardar Producto
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
// SOLO NUMEROS
document.getElementById("precio").addEventListener("keypress", function(e){
   if(!/[0-9]/.test(e.key)){
      e.preventDefault();
   }
});

// GUARDAR
document.getElementById("form_producto").addEventListener("submit", function(e){

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
// INPUT PRECIO
const precioInput = document.getElementById("precio");
const precioLetras = document.getElementById("precio_letras");


// FORMATEAR MILES
precioInput.addEventListener("input", function () {

    // ELIMINAR TODO MENOS NUMEROS
    let valor = this.value.replace(/\D/g, '');

    // SI ESTA VACIO
    if (valor === '') {

        this.value = '';
        precioLetras.value = '';

        return;

    }

    // FORMATO GS
    this.value = Number(valor).toLocaleString('es-PY');

    // LETRAS
    precioLetras.value = numeroALetras(valor) + ' Guaraníes';

});
</script>

<?php
   include_once '../includes/footer.php';
?>