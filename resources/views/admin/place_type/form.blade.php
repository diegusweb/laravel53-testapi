{!! Form::open(['url' => $url,'method' => $method,'files' => true]) !!}
  <div class="form-group">
    {{Form::text('title',$product->title,['class' => 'form-control',
      'placeholder' => 'title'])}}
  </div>
  <div class="form-group">
    {{Form::text('pricing',$product->pricing,['class' => 'form-control',
      'placeholder' => 'Precio de producto'])}}
  </div>
  <div class="form-group">
    {{Form::file('cover')}}
  </div>
  <div class="form-group">
    {{Form::textarea('description',$product->description,['class' => 'form-control',
      'placeholder' => 'description'])}}
  </div>
  <div class="form-group">
    <a href="{{url('/products')}}">Regresar listado de productos</a>
    <input type="submit" value="Enviar" class="btn btn-success"/>
  </div>
{!! Form::close() !!}
</div>
