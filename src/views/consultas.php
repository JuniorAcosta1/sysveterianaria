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
                            <i class="fa fa-stethoscope text-primary"></i>Consultas Veterinarias
                        </h2>
                        <p class="text-muted mb-0">Sistema Veterinaria</p>
                    </div>
                    <a href="consultas.php" class="btn btn-outline-secondary">
                        <i class="fa fa-arrow-left"></i>Volver
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
                                <i class="fa fa-heartbeat text-danger"></i>
                                Nueva Consulta
                            </h2>
                        </div>
                    </div>
                    <!-- BODY -->
                    <div class="full padding_infor_info">
                        <form id="form_consulta">
                            <!-- MASCOTA -->
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <h5 class="text-primary"><i class="fa fa-paw"></i>
                                        Seleccionar Mascota
                                    </h5>
                                    <hr>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label>Buscar Mascota</label>
                                    <select class="form-control"id="mascota_id"required>
                                    </select>
                                </div>
                            </div>
                            <!-- INFO -->
                            <div class="alert alert-info"id="info_mascota"style="display:none;">
                                <div class="row">
                                    <div class="col-md-3">
                                        <strong>Mascota:</strong>
                                        <br>
                                        <span id="mascota_nombre"></span>
                                    </div>
                                    <div class="col-md-3">
                                        <strong>Especie:</strong><br>
                                        <span id="mascota_especie"></span>
                                    </div>
                                    <div class="col-md-3">
                                        <strong>Raza:</strong><br>
                                        <span id="mascota_raza"></span>
                                    </div>
                                    <div class="col-md-3">
                                        <strong>Dueño:</strong><br>
                                        <span id="cliente_nombre"></span>
                                    </div>
                                </div>
                            </div>
                            <!-- AGENDA -->
                            <div class="row mt-4">
                                <div class="col-md-12 mb-3">
                                    <h5 class="text-success">
                                        <i class="fa fa-calendar"></i>
                                        Agenda de Consulta
                                    </h5>
                                    <hr>
                                </div>
                                <!-- VETERINARIO -->
                                <div class="col-md-4 mb-3">
                                    <label>Veterinario</label>
                                    <select class="form-control"id="veterinario_id"required>
                                    <option value="">Seleccionar</option>
                                    <option value="1">Dr. Carlos</option>
                                    <option value="2">Dra. María</option>
                                    </select>
                                </div>
                                <!-- FECHA -->
                                <div class="col-md-4 mb-3">
                                    <label>Fecha Consulta</label>
                                    <input type="date"class="form-control"id="fecha_consulta"min=""required>                                
                                </div>
                                <!-- HORA -->
                                <div class="col-md-4 mb-3">
                                    <label>Hora Disponible</label>
                                    <select class="form-control"id="hora_consulta"required>
                                    <option value="">
                                        Seleccione fecha
                                    </option>
                                    </select>
                                </div>
                            </div>
                            <!-- DATOS CLINICOS -->
                            <div class="row mt-4">
                                <div class="col-md-12 mb-3">
                                    <h5 class="text-danger">
                                        <i class="fa fa-file-medical"></i>
                                        Datos Clínicos
                                    </h5>
                                    <hr>
                                </div>
                                <!-- MOTIVO -->
                                <div class="col-md-6 mb-3">
                                    <label>Motivo Consulta</label>
                                    <textarea class="form-control"name="motivo"rows="4"required></textarea>
                                </div>
                                <!-- OBS -->
                                <div class="col-md-6 mb-3">
                                    <label>Observaciones</label>
                                    <textarea class="form-control"name="observaciones"rows="4"></textarea>
                                </div>
                                <!-- PESO -->
                                <div class="col-md-3 mb-3">
                                    <label>Peso (kg)</label>
                                    <input type="number"step="0.1"class="form-control"name="peso">
                                </div>
                                <!-- TEMP -->
                                <div class="col-md-3 mb-3">
                                    <label>Temperatura °C</label>
                                    <input type="number"step="0.1"class="form-control"name="temperatura">
                                </div>
                                <!-- FC -->
                                <div class="col-md-3 mb-3">
                                    <label>Frecuencia Cardíaca</label>
                                    <input type="number"class="form-control"name="fc">
                                </div>
                                <!-- FR -->
                                <div class="col-md-3 mb-3">
                                    <label>Frecuencia Respiratoria</label>
                                    <input type="number"class="form-control"name="fr">
                                </div>
                            </div>
                            <!-- DIAGNOSTICO -->
                            <div class="row mt-4">
                                <div class="col-md-12 mb-3">
                                    <h5 class="text-warning">
                                        <i class="fa fa-notes-medical"></i>
                                        Diagnóstico
                                    </h5>
                                    <hr>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <textarea class="form-control"name="diagnostico"rows="4"></textarea>
                                </div>
                            </div>
                            <!-- TRATAMIENTO -->
                            <div class="row mt-4">
                                <div class="col-md-12 mb-3 d-flex justify-content-between align-items-center">
                                    <h5 class="text-primary mb-0">
                                        <i class="fa fa-pills"></i>
                                        Tratamiento
                                    </h5>
                                    <button type="button"class="btn btn-primary"id="btn_agregar">
                                        <i class="fa fa-plus"></i>
                                        Agregar Medicamento
                                    </button>
                                </div>
                            </div>
                            <!-- TABLA -->
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th>Medicamento</th>
                                        <th>Dosis</th>
                                        <th>Frecuencia</th>
                                        <th>Días</th>
                                        <th width="80">Acción</th>
                                    </tr>
                                    </thead>
                                    <tbody id="detalle_tratamiento"></tbody>
                                </table>
                            </div>
                            <!-- PROXIMO CONTROL -->
                            <div class="row mt-4">
                                <div class="col-md-6 mb-3">
                                    <label>Próximo Control</label>
                                    <input type="date"class="form-control"name="proximo_control">
                                </div>
                            </div>
                            <!-- BOTONES -->
                            <div class="row mt-4">
                                <div class="col-md-12 text-end">
                                    <button type="reset"class="btn btn-secondary">
                                        <i class="fa fa-refresh"></i>
                                        Limpiar
                                    </button>
                                    <button type="submit"class="btn btn-success"id="btn_guardar">
                                        <i class="fa fa-save"></i>
                                        Guardar Consulta
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
 <!-- JQUERY -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <!-- SELECT2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
 <script>
 // SELECT2 MASCOTAS
$('#mascota_id').select2({
    placeholder: 'Buscar mascota...',
    ajax: {
       url: 'buscar_mascota.php',
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
 // SELECCIONAR MASCOTA
$('#mascota_id').on('select2:select', function (e) {
    let data = e.params.data;
    $('#info_mascota').show();
    $('#mascota_nombre').html(data.nombre);
   $('#mascota_especie').html(data.especie);
   $('#mascota_raza').html(data.raza);
   $('#cliente_nombre').html(data.cliente);
 });
 // BLOQUEAR DOMINGOS
$('#fecha_consulta').on('change', function(){

   let valor = $(this).val();

   if(!valor) return;

   let partes = valor.split('-');

   // IMPORTANTE: crear fecha local real
   let fecha = new Date(partes[0], partes[1] - 1, partes[2]);

   let dia = fecha.getDay(); // 0 = domingo

   if(dia === 0){

      alert('No se atiende domingos');

      $(this).val('');

   }

});
 // Para poner “hoy” como mínimo
 $(document).ready(function(){

   let hoy = new Date();
   let offset = hoy.getTimezoneOffset();
   hoy = new Date(hoy.getTime() - (offset * 60 * 1000));

   let fechaMin = hoy.toISOString().split('T')[0];

   $('#fecha_consulta').attr('min', fechaMin);

});
 // CARGAR HORARIOS
$('#fecha_consulta, #veterinario_id').change(function(){
    let fecha = $('#fecha_consulta').val();
   let veterinario = $('#veterinario_id').val();
    if(fecha != '' && veterinario != ''){
       $.ajax({
          url: 'horarios_disponibles.php',
          type: 'POST',
          data: {
             fecha: fecha,
            veterinario_id: veterinario
          },
          dataType: 'json',
          success: function(data){
             $('#hora_consulta').html('');
             if(data.length > 0){
                $('#hora_consulta').append(`
                  <option value="">
                     Seleccionar hora
                  </option>
               `);
                data.forEach(function(hora){
                   $('#hora_consulta').append(`
                     <option value="${hora}">
                        ${hora}
                     </option>
                  `);
                });
             } else {
                $('#hora_consulta').append(`
                  <option value="">
                     Sin horarios disponibles
                  </option>
               `);
             }
          }
       });
    }
 });
 // AGREGAR MEDICAMENTO
$('#btn_agregar').click(function(){
    let fila = `
       <tr>
          <td>
            <input 
               type="text"
               class="form-control"
               name="medicamento[]"
               required>
         </td>
          <td>
            <input 
               type="text"
               class="form-control"
               name="dosis[]">
         </td>
          <td>
            <input 
               type="text"
               class="form-control"
               name="frecuencia[]">
         </td>
          <td>
            <input 
               type="number"
               class="form-control"
               name="dias[]">
         </td>
          <td class="text-center">
             <button 
               type="button"
               class="btn btn-danger btn-sm eliminar">
                <i class="fa fa-trash"></i>
             </button>
          </td>
       </tr>
    `;
    $('#detalle_tratamiento').append(fila);
 });
 // ELIMINAR FILA
$(document).on('click', '.eliminar', function(){
    $(this).closest('tr').remove();
 });
 // GUARDAR
$('#form_consulta').submit(function(e){
    e.preventDefault();
    let boton = $('#btn_guardar');
    boton.html('<i class="fa fa-spinner fa-spin"></i> Guardando...');
   boton.prop('disabled', true);
    setTimeout(function(){
       boton.html('<i class="fa fa-check"></i> Consulta Guardada');
       boton.removeClass('btn-success');
      boton.addClass('btn-primary');
    }, 1500);
 });
 </script>
 <?php
include_once '../includes/footer.php';
?>