@extends('layouts.app')

@section('main-content')
    <div class="row">
      <div class="col-xs-12">

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Data Table With Full Features</h3>
            <a href="{{url('/bo/address/create')}}" class="btn btn-success" style="float:right;">
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
                  <th>place</th>
                  <th>address</th>
                  <th>lat</th>
                  <th>lng</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($address as $place)
                        <tr>
                           <td>ss</td>
                          <td  width="25%">{{ $place->title}}</td>
                          <td>{{ $place->place_name}}</td>
                          <td width="20%">{{ $place->address}}</td>
                          <td>{{ $place->lat}}</td>
                          <td>{{ $place->lng}}</td>
                          <td>{{ $place->status == 1 ? "Activo" : "Inactivo"}}</td>
                          <td>

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

@endsection
