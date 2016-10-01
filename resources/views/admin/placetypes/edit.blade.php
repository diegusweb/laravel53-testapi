@extends('layouts.app')

@section('main-content')

    <div class="container white">
      <h1>Edit Place Type</h1>
        @include('admin.placetypes.form',['placetype' => $placetype, 'url' => '/bo/placetypes/'.$placetype->id, 'method' => 'PATCH'])
    </div>
@endsection
