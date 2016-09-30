@extends('layouts.app');

@section('main-content')

    <div class="container white">
      <h1>Nuevo Tipo de Lugar</h1>
    @include('place_type.form',['type' => $type, 'url' => '/place_types', 'method' => 'POST'])
    </div>
@endsection
