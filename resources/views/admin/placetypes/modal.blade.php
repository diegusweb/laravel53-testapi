<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">

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
          <div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="actualizar" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
