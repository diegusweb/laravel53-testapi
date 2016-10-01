@extends('layouts.app')

@section('main-content')

    <div class="white">
      <h1>Nuevo Lugar</h1>
    @include('admin.place.form',['categories'=>$categories,'place' => $place, 'url' => '/bo/place', 'method' => 'POST'])
    </div>
@endsection
