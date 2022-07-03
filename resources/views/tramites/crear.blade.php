@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
<h4>NUEVO TRAMITE</h4>
<form class="row g-3">
    
  <section class="content">        
  <div class="row">
      <div class="col-md-3 btn-print">
          <div class="form-group">
                                       <label >FECHA</label>
                  
                        </div>
                      </div>
                        <div class="col-md-4 btn-print">
                        <div class="form-group">
                      <input type="date" class="form-control" id="ffcontrato" name="fecha" value="2022-06-29"  readonly="readonly">
                        </div>
                      </div>
                            <div class="col-md-4 btn-print">
                  
                      </div>
                      </div>
                      
                  
                      
  <div class="row">
                      <div class="col-md-3 btn-print">
                        <div class="form-group">
                            <label >TIPO DE TRAMITE</label>
                           di 
                        </div>
                      </div>

                        <div class="form-group">
                              <select class="form-control select2" name="area_revision" required>
                              
                                              <option value="Tramite Colegiatura Ordinaria">Imagen Institucional</option>
                                              <option value="Certificado de Habilidad">Certificado de Habilidad</option>
                                              <option value="Renovación de Registro Tempora">Renovación de Registro Tempora</option>
                              </select>

                      </div>
                            
                      </div>

  <div class="row">
  <div class="col">
    <label for="exampleFormControlInput1" class="form-label">Id Colegiado</label>
    <input type="number" class="form-control" placeholder="Id Colegiado" aria-label="Id Colegiado">
  </div>

</div>


<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Asunto</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>


<div class="mb-3">
  <label for="formFileMultiple" class="form-label">Adjuntar Archivos Necesarios</label>
  <input class="form-control" type="file" id="formFileMultiple" multiple>
</div>
 <div class="col-12">
    <button class="btn btn-primary" type="submit">Enviar</button>
  </div>

</form>

@stop
@section('css')
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop




