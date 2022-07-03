

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>DASHBOARD</h1>
@stop

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h2 class="pb-2 border-bottom">Bienvenido  {{ auth()->user()->name }} </h2>
        </div>
    </div>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Tramite</th>
            <th scope="col">Estado</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>{{ auth()->user()->name }}</td>
            <td>Colegiatura</td>
            <td>en espera</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>{{ auth()->user()->name }}</td>
            <td>Alquiler</td>
            <td>Denegado</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>{{ auth()->user()->name }}</td>
            <td>Renuncia</td>
            <td>Aceptado</td>
          </tr>
        </tbody>
      </table>
@stop
@section('css')
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop




