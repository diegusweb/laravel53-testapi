<table id="example1" class="table table-bordered table-striped">
  <thead>
  <tr>
      <th>No</th>
    <th>Nombre</th>
    <th>Descripcion</th>
    <th>Status</th>
    <th>Actions</th>
  </tr>
  </thead>
  <tbody>
      @foreach ($placetypes as $place)
          <tr>
              <td>{{ ++$i }}</td>
            <td width="20%">{{ $place->name}}</td>
            <td width="50%">{{ $place->description}}</td>
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
 {!! $placetypes->render() !!}
