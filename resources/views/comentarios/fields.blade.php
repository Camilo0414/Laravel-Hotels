<!-- Hotel Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hotel_id', 'Hotel Id:') !!}
    {!! Form::select('hotel_id', $hoteles, ['class' => 'form-control']) !!}
</div>

<!-- Usuario Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usuario_id', 'Usuario Id:') !!}
    {!! Form::select('usuario_id', $usuarios, ['class' => 'form-control']) !!}
</div>

<!-- Calificacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('calificacion', 'Calificacion:') !!}
    {!! Form::text('calificacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('comentarios.index') !!}" class="btn btn-default">Cancel</a>
</div>
