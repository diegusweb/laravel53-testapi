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

			  <div id="list-place"> </div>
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
<script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
<script type="text/javascript">
$(document).ready(function () {
	   listPlace();
});

var listPlace = function(){
  $.ajax({
    type:'get',
    url:'{{ url('bo/place/listall') }}',
    success: function(data){
      $('#list-place').empty().html(data);
    }
  });
}

var Mostrar = function(id)
{
  var route = "{{url('bo/place')}}/"+id+"/edit";
  $.get(route, function(data){
    $('#id').val(data.id);
    $('#name').val(data.name);
    $('#description').val(data.description);
  })
}

$('#actualizar').click(function(e){
   var id = $('#id').val();
   var name = $('#name').val();
   var details = $('#description').val();
   var route = "{{url("bo/placetypes")}}/"+id+"";
   var token = $('#token').val();
   var dataString = {name: name, description: details};


   $.ajax({
	 url:route,
	 headers:{'X-CSRF-TOKEN':token},
	 type:'PUT',
	 datatype:'json',
	 data:dataString,
	 success:function(data)
	 {
		 if(data.success == 'true')
		 {
		   listPlace();
		 $('#myModal').modal('hide');


		 }
	 },
	 error:function(data){
	   $("#error").html(data.responseJson.name);
	 }
   });

 });


$(document).on("click", ".pagination li a", function(e){
  e.preventDefault();

  var url = $(this).attr('href');

  $.ajax({
    type:'get',
    url:url,
    success: function(data){
      $('#list-place').empty().html(data);
    }
  });
})
</script>
@endsection
