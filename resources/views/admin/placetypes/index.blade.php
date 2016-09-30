@extends('layouts.app')

@section('htmlheader_title')
	PLace Type
@endsection


@section('main-content')

         <div class="row">
           <div class="col-xs-12">

             <div class="box">
               <div class="box-header">
                 <h3 class="box-title">Data Table With Full Features</h3>
				 <a href="{{url('/bo/placetypes/create')}}" class="btn btn-primary" style="float:right;">
				  <i class="glyphicon glyphicon-plus"></i> NUEVO TIPO DE LUGAR
				  </a>
               </div>


               <!-- /.box-header -->
               <div class="box-body">


                 <table id="example1" class="table table-bordered table-striped">
                   <thead>
                   <tr>
                     <th>Nombre</th>
                     <th>Descripcion</th>
                     <th>Actions</th>
                   </tr>
                   </thead>
                   <tbody>
					   @foreach ($placetypes as $place)
						   <tr>
							 <td>{{ $place->name}}</td>
							 <td>{{ $place->description}}</td>
							 <td>
			                    <a href="{{url('/bo/placetypes/'.$place->id)}}" class="btn btn-success">Ver</a>
			                    <a href="{{url('/bo/placetypes/'.$place->id.'/edit')}}"  class="btn btn-info">Editar</a>
								<a href="{{url('/bo/placetypes/'.$place->id.'/edit')}}"  class="btn btn-danger">Eliminar</a>
			{{-- @include('products.delete',['product' => $product]) --}}
			                </td>
						   </tr>
					   @endforeach
                   </tbody>

                 </table>
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
