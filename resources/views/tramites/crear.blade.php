@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
<h4>NUEVO TRAMITE</h4>
<form action ="{{url('/Tramite')}}" method="post" class="row g-3">
  @csrf
    
  <section class="content">        
  <div class="row">
      <div class="col-md-3 btn-print">
          <div class="form-group">
            <label >FECHA</label>
                  
          </div>
      </div>
      <div class="col-md-4 btn-print">
         <div class="form-group">
            <input type="date" class="form-control" id="ffcontrato" name="fecha_emi" value="2022-06-29"  readonly="readonly">
            <input type="date" class="form-control" id="ffcontrato" name="fecha_recep" value="2022-06-29"  readonly="readonly">
          </div>
          </div>
                            <div class="col-md-4 btn-print">
                  
                      </div>
                      </div>
                      
                  
                      
  <div class="row">
                      <div class="col-md-3 btn-print">
                        <div class="form-group">
                            <label >TIPO DE TRAMITE</label>
                           
                        </div>
                      </div>

                        <div class="form-group">
                              <select class="form-control select2" name="tipo_tramite_id" required>
                              
                                              <option   name="tipo_tramite-id">1</option>
                                              <option   name="tipo_tramite-id">2</option>
                                              <option   name="tipo_tramite-id">3</option>
                              </select>

                      </div>
                            
                      </div>

  <div class="row">
  <div class="col">
    <label for="exampleFormControlInput1" class="form-label">Id Colegiado</label>
    <input type="number" class="form-control" placeholder="Id Colegiado" aria-label="Id Colegiado" name="colegiado_id">
  </div>

</div>


<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Asunto</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" name="asunto" rows="3"></textarea>
</div>


<div class="mb-3">
  <label for="formFileMultiple" class="form-label">Adjuntar Archivos Necesarios</label>
  <input class="form-control" type="file" id="formFileMultiple" multiple>
</div>
 <div class="col-12">
    <input class="btn btn-primary" value="enviar" type="submit">
  </div>

</form>

@stop
@section('css')
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop




