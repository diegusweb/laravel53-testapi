 {{-- {!! Form::open(['url' => $url, 'method' => $method]) !!}
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
{!! Form::close() !!} --}}
 {!! Form::open(['id' => 'form']) !!}
<input type="hidden" name="_token" value="{{csrf_token()}}" id="token">
<input type="hidden"  id="id">
<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>title:</strong>
                {!! Form::text('name', null, array('id' => 'name','placeholder' => 'Name','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>description:</strong>
                {!! Form::textarea('description', null, array('id' => 'description','placeholder' => 'description','class' => 'form-control','style'=>'height:100px')) !!}
            </div>
        </div>

    </div>
    {!! Form::close() !!}
