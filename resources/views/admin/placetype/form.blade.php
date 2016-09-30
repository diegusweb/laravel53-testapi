{!! Form::open(['url' => $url, 'method' => $method]) !!}
  <div class="form-group">
    {{Form::text('title',$placetype->name,['class' => 'form-control',
      'placeholder' => 'title'])}}
  </div>
  <div class="form-group">
    {{Form::textarea('description',$placetype->description,['class' => 'form-control',
      'placeholder' => 'description'])}}
  </div>
  <div class="form-group">
    <a href="{{url('/platetype')}}">Regresar listado de productos</a>
    <input type="submit" value="Enviar" class="btn btn-success"/>
  </div>
{!! Form::close() !!}
</div>
