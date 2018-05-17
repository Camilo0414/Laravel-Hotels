
@include('vistas_auxiliares.menuMain')
{!! Form::open(['route' => 'hotels.store']) !!}

    <!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Costo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('costo', 'Costo:') !!}
    {!! Form::text('costo', null, ['class' => 'form-control']) !!}
</div>

<!-- Estrellas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estrellas', 'Estrellas:') !!}
    {!! Form::text('estrellas', null, ['class' => 'form-control']) !!}
</div>

<!-- Ubicacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ubicacion', 'Ubicacion:') !!}
    {!! Form::text('ubicacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Ciudad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ciudad', 'Ciudad:') !!}
    {!! Form::text('ciudad', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('hotels.index') !!}" class="btn btn-default">Cancel</a>
</div>

{!! Form::close() !!}

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
             @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif