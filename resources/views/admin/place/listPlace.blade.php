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
             <td>{{ ++$i }}</td>
            <td  width="25%">{{ $place->name}}</td>
            <td>{{ $place->place_type_name}}</td>
            <td width="20%">{{ $place->email}}</td>
            <td>{{ $place->path}}</td>
            <td>{{ $place->status == 1 ? "Activo" : "Inactivo"}}</td>
            <td>
                <div style="float:left">
                    {{-- <a href="{{url('/bo/placetypes/'.$place->id.'/edit')}}"  class="btn btn-info">Editar</a> --}}
                     <a class="btn btn-primary" href="#" onclick="Mostrar({{$place->id}})" data-toggle="modal" data-target="#myModal">Edit</a>
                </div>
                <div style="float:rigth">
                    @include('admin.placetypes.delete',['placetype' => $place])
                </div>
                <div style="float:rigth">
                    <a href="{{url('/bo/address/addAddress/'.$place->id)}}" class="btn btn-success">address</a>
                </div>
           </td>
          </tr>
      @endforeach
  </tbody>

</table>

 {!! $places->render() !!}
