@extends('layouts.app')

@section('htmlheader_title')
	PLace
@endsection


@section('main-content')
    <div class="row">
      <div class="col-xs-12">

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Data Table With Full Features</h3>
            <a href="{{url('/bo/place/create')}}" class="btn btn-success" style="float:right;">
             <i class="glyphicon glyphicon-plus"></i> NUEVO LUGAR
             </a>
          </div>


          <!-- /.box-header -->
          <div class="box-body">

    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>No</th>
        <th>Nombre</th>
        <th>place type</th>
        <th>Email</th>
        <th>path</th>
        <th>Status</th>
        <th>Actions</th>
      </tr>
      </thead>
      <tbody>
          @foreach ($places as $place)
              <tr>
                  <td>s</td>
                <td>{{ $place->name}}</td>
                <td>{{ $place->place_type_id}}</td>
                <td>{{ $place->email}}</td>
                <td>{{ $place->path}}</td>
                <td>{{ $place->status}}</td>
                <td>
                    <div style="float:left">
                        {{-- <a href="{{url('/bo/placetypes/'.$place->id.'/edit')}}"  class="btn btn-info">Editar</a> --}}
                         <a class="btn btn-primary" href="#" onclick="Mostrar({{$place->id}})" data-toggle="modal" data-target="#myModal">Edit</a>
                    </div>
                    <div style="float:rigth">
                        @include('admin.placetypes.delete',['placetype' => $place])
                    </div>
               </td>
              </tr>
          @endforeach
      </tbody>

    </table>
     {{-- {!! $places->render() !!} --}}
 </div>
 <!-- /.box-body -->
</div>
<!-- /.box -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->

</div>
@endsection
