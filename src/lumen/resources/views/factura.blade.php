<!-- resources/views/factura.blade.php -->

<x-base>

<form class="form-horizontal" action="add" method="post">
<fieldset>

<!-- Form Name -->
<legend>Genera tu factura</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="ticket">Ticket*</label>  
  <div class="col-md-12">
  <input id="ticket" name="ticket" type="number" placeholder="Ingresa tu # de ticket" class="form-control input-md" required="">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="ticket">Monto*</label>  
  <div class="col-md-12">
  <input id="monto" name="monto" type="number" step="0.01" placeholder="Ingresa Monto" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="rfc">Nombre o Razón Social*</label>  
  <div class="col-md-12">
  <input id="razon_social" name="razon_social" type="text" placeholder="Ingresa tu Razón Social" class="form-control input-md" required="">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="rfc">RFC*</label>  
  <div class="col-md-12">
  <input id="rfc" name="rfc" type="text" placeholder="Ingresa tu RFC" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="sucursal">Sucursal*</label>  
  <div class="col-md-12">
  <input id="sucursal" name="sucursal" type="text" placeholder="Ingresa el ID de sucursal" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="fecha">Fecha*</label>  
  <div class="col-md-12">
  <input id="fecha" name="fecha" type="text" placeholder="DD/MM/AAAA" class="form-control input-md" required="">
    
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-12 control-label" for="enviar"></label>
  <div class="col-md-12">
    <button id="enviar" name="enviar" class="btn btn-primary">Enviar</button>
  </div>
</div>


</div>
<script>
    $('#fecha').datepicker({
        format: 'mm/dd/yyyy',
        todayBtn: "linked",
        language: "es",
        orientation: "top left"
    });    
</script>
</fieldset>
</form>
</x-layout>