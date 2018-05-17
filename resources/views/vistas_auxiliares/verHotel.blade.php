@include('vistas_auxiliares.menuMain')
<div >
    <h3>{{$hotel->nombre}}</h3>
    <h5>{{$hotel->ciudad}}</h5>
   
    <p>Ubicacion: {{$hotel->ubicacion}}</p>

    <div class="o-price">                                          
        Precio Habitación : <span class="o-price__currency"> </span>
        <span class="o-price__num">$ {{ number_format($hotel->costo, 2, ',', '.') }}</span>
    </div>

    <span class="o-hotel-review__score"><em>{{$hotel->estrellas}}</em>/5</span>
</div>

            @foreach($hotel->comentarios as $comentario)
             
                                   
                <div >

                    <div>                         
                        <h3>{{    App\User::where([ ['id', '=', $comentario->usuario_id],])->first()->name   }} comentó:</h3>
                         <span >{{$comentario->calificacion}}/5</span>
                    </div>

                     <div> 
                        <h5>{{$comentario->descripcion}}</h5>  
                    </div>

                </div>
                                   
            @endforeach

{!! Form::open(['route' => 'comentarios.store']) !!}

<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group col-sm-6">
    {!! Form::label('calificacion', 'Calificacion:') !!}
   {!! Form::select('calificacion', array('5' => '5', '4' => '4','3' => '3', '2' => '2', '1' => '1'),['class' => 'form-control'])!!}
</div>


<div class="form-group col-sm-12">
    {!! Form::submit('agregar comentario', ['class' => 'btn btn-primary']) !!}
</div>
{!! Form::hidden('hotel_id', $hotel->id, ['class' => 'form-control']) !!}
{!! Form::hidden('usuario_id', Auth::user()->id, ['class' => 'form-control']) !!}
{!! Form::close() !!}