{!! Form::open(['url' => $url, 'method' => $method,'files' => true]) !!}
  <div class="form-group">
    {{Form::text('title',$place->name,['class' => 'form-control',
      'placeholder' => 'title'])}}
  </div>
  <div class="form-group">
       {!! Form::select('id', $categories, null, ['placeholder' => 'Select Type', 'class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {{Form::text('email',$place->email,['class' => 'form-control',
      'placeholder' => 'email'])}}
  </div>
  <div class="form-group">
    {{Form::select('status', ['1' => 'Activo', '0' => 'Inactivo'], null, ['placeholder' => 'Select Status','class' => 'form-control']) }}
  </div>
  <div class="form-group">
     {{Form::file('file', array('class' => 'image'))}}
  </div>
  <div class="form-group">
    {{Form::textarea('description',$place->description,['class' => 'form-control',
      'placeholder' => 'description'])}}
  </div>
  <div class="form-group">
    <a href="{{url('/platetype')}}">Regresar listado de lugare</a>
    <input type="submit" value="Enviar" class="btn btn-success"/>
  </div>
{!! Form::close() !!}
