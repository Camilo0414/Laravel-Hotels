<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $comentario->id !!}</p>
</div>

<!-- Hotel Id Field -->
<div class="form-group">
    {!! Form::label('hotel_id', 'Hotel Id:') !!}
    <p>{!! $comentario->hotel_id !!}</p>
</div>

<!-- Usuario Id Field -->
<div class="form-group">
    {!! Form::label('usuario_id', 'Usuario Id:') !!}
    <p>{!! $comentario->usuario_id !!}</p>
</div>

<!-- Calificacion Field -->
<div class="form-group">
    {!! Form::label('calificacion', 'Calificacion:') !!}
    <p>{!! $comentario->calificacion !!}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{!! $comentario->descripcion !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $comentario->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $comentario->updated_at !!}</p>
</div>

