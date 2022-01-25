<!-- resources/views/factura.blade.php -->

<x-base>

<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Genera tu factura</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="ticket">Ticket*</label>  
  <div class="col-md-12">
  <input id="ticket" name="ticket" type="text" placeholder="Ingresa tu # de ticket" class="form-control input-md" required="">
    
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
        todayBtn: "linked",
        language: "es",
        orientation: "top left"
    });    
</script>
</fieldset>
</form>
</x-layout>