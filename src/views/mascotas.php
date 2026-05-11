<?php 
include_once(__DIR__ . "/../includes/header.php");
?>
 <!-- SELECT2 -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
 <div class="midde_cont">
   <div class="container-fluid">
       <!-- TITULO -->
      <div class="row column_title">
         <div class="col-md-12">
             <div class="page_title d-flex justify-content-between align-items-center">
                <div>
                  <h2>
                     <i class="fa fa-paw text-primary"></i>
                     Registro de Mascotas
                  </h2>
                   <p class="text-muted mb-0">
                     Sistema Veterinaria
                  </p>
               </div>
                <a href="mascotas.php" class="btn btn-outline-secondary">
                  <i class="fa fa-arrow-left"></i>
                  Volver
               </a>
             </div>
          </div>
      </div>
       <!-- FORM -->
      <div class="row">
         <div class="col-md-12">
             <div class="white_shd full margin_bottom_30">
                <!-- HEADER -->
               <div class="full graph_head">
                   <div class="heading1 margin_0">
                      <h2>
                        <i class="fa fa-user-md text-success"></i>
                        Nueva Mascota
                     </h2>
                   </div>
                </div>
                <!-- BODY -->
               <div class="full padding_infor_info">
                   <form id="form_mascota">
                      <!-- CLIENTE -->
                     <div class="row">
                         <div class="col-md-12 mb-3">
                            <h5 class="text-primary">
                              <i class="fa fa-user"></i>
                              Seleccionar Dueño
                           </h5>
                            <hr>
                         </div>
                         <div class="col-md-8 mb-3">
                            <label>Buscar Cliente por Cédula o Nombre<span class="text-danger">*</span></label>
                            <select class="form-control"id="cliente_id"required></select>
                         </div>
                         <div class="col-md-4 mb-3 d-flex align-items-end">
                            <button type="button"class="btn btn-success w-100"><i class="fa fa-plus"></i>Nuevo Cliente</button>
                         </div>
                      </div>
                      <!-- INFO CLIENTE -->
                     <div 
                        class="alert alert-info"
                        id="info_cliente"
                        style="display:none;" >
                         <div class="row">
                            <div class="col-md-4">
                              <strong>Cliente:</strong><br>
                              <span id="cliente_nombre"></span>
                           </div>
                            <div class="col-md-4">
                              <strong>Documento:</strong><br>
                              <span id="cliente_documento"></span>
                           </div>
                            <div class="col-md-4">
                              <strong>Teléfono:</strong><br>
                              <span id="cliente_telefono"></span>
                           </div>
                         </div>
                      </div>
                      <!-- DETALLE MASCOTAS -->
                     <div class="row mt-4">
                         <div class="col-md-12 mb-3 d-flex justify-content-between align-items-center">
                            <div>
                               <h5 class="text-success mb-0"><i class="fa fa-paw"></i>Mascotas</h5>
                            </div>
                            <button type="button"class="btn btn-primary"id="btn_agregar"><i class="fa fa-plus"></i>Agregar Mascota</button>
                         </div>
                      </div>
                      <!-- TABLA -->
                     <div class="table-responsive">
                         <table class="table table-bordered table-hover align-middle">
                            <thead class="thead-dark">
                               <tr>
                                    <th>Nombre</th>
                                    <th>Especie</th>
                                    <th>Raza</th>
                                    <th>Sexo</th>
                                    <th>Edad</th>
                                    <th>Peso</th>
                                    <th width="80">Acción</th>
                               </tr>
                            </thead>
                            <tbody id="detalle_mascotas">
                            </tbody>
                         </table>
                      </div>
                      <!-- BOTONES -->
                     <div class="row mt-4">
                         <div class="col-md-12 text-end">
                            <button type="reset"class="btn btn-secondary"><i class="fa fa-refresh"></i>Limpiar</button>
                            <button type="submit"class="btn btn-primary"id="btn_guardar"><i class="fa fa-save"></i>Guardar</button>
                         </div>
                      </div>
                   </form>
                </div>
             </div>
          </div>
      </div>
    </div>
</div>
 <!-- JQUERY -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <!-- SELECT2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
 <script>
 // SELECT2 CLIENTE
$('#cliente_id').select2({
    placeholder: 'Buscar cliente...',
    ajax: {
       url: 'buscar_cliente.php',
       dataType: 'json',
       delay: 250,
       data: function(params){
          return {
            q: params.term
         };
       },
       processResults: function(data){
          return {
            results: data
         };
       },
       cache: true
    }
 });
 // AL SELECCIONAR CLIENTE
$('#cliente_id').on('select2:select', function (e) {
    let data = e.params.data;
    $('#info_cliente').show();
    $('#cliente_nombre').html(data.nombre);
   $('#cliente_documento').html(data.documento);
   $('#cliente_telefono').html(data.telefono);
 });
 // AGREGAR FILA
$('#btn_agregar').click(function(){
    let fila = `
      <tr>
          <td>
            <input 
               type="text"
               class="form-control"
               name="mascota_nombre[]"
               required
            >
         </td>
          <td>
             <select 
               class="form-control"
               name="mascota_especie[]"
               required
            >
                <option value="">Seleccionar</option>
               <option>Perro</option>
               <option>Gato</option>
               <option>Ave</option>
               <option>Conejo</option>
               <option>Otro</option>
             </select>
          </td>
          <td>
            <input 
               type="text"
               class="form-control"
               name="mascota_raza[]"
            >
         </td>
          <td>
             <select 
               class="form-control"
               name="mascota_sexo[]"
            >
                <option value="">Seleccionar</option>
               <option>Macho</option>
               <option>Hembra</option>
             </select>
          </td>
          <td>
            <input 
               type="number"
               class="form-control"
               name="mascota_edad[]"
               min="0"
            >
         </td>
          <td>
            <input 
               type="number"
               class="form-control"
               name="mascota_peso[]"
               step="0.1"
            >
         </td>
          <td class="text-center">
             <button 
               type="button"
               class="btn btn-danger btn-sm eliminar"
            >
               <i class="fa fa-trash"></i>
            </button>
          </td>
       </tr>
   `;
    $('#detalle_mascotas').append(fila);
 });
 // ELIMINAR FILA
$(document).on('click', '.eliminar', function(){
    $(this).closest('tr').remove();
 });
 // SUBMIT
$('#form_mascota').submit(function(e){
    e.preventDefault();
    let boton = $('#btn_guardar');
    boton.html('<i class="fa fa-spinner fa-spin"></i> Guardando...');
    boton.prop('disabled', true);
    setTimeout(function(){
        boton.html('<i class="fa fa-check"></i> Guardado');
        boton.removeClass('btn-primary');
        boton.addClass('btn-success');
    }, 1500);
 });
 </script>
 <?php
include_once '../includes/footer.php';
?>