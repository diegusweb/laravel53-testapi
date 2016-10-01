@extends('layouts.app')

@section('main-content')

    <div class="container white">
      <h1>Nuevo Tipo de Lugar</h1>
    @include('admin.placetypes.form',['placetype' => $placeType, 'url' => '/bo/placetypes', 'method' => 'POST'])
    </div>
@endsection
