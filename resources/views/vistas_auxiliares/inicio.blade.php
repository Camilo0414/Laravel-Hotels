
@include('vistas_auxiliares.menuMain')
<ul>
    @foreach($hotels as $hotel)
       <li>
           <div class="hotel-item">
                <h3>{{$hotel->nombre}}</h3>
                <h5>{{$hotel->ciudad}}</h5>
              
                <p>Ubicacion: {{$hotel->ubicacion}}</p>

                 <div class="o-price">                                          
                     Precio Habitación : <span class="o-price__currency"> </span>
                     <span class="o-price__num">$ {{ number_format($hotel->costo, 2, ',', '.') }}</span>
                </div>

                <span class="o-hotel-review__score"><em>{{$hotel->estrellas}}</em>/5</span>

                        {!! Form::open(['route' => ['hotels.destroy', $hotel->id], 'method' => 'delete']) !!}
                            <div class='btn-group'>
                                <a href="{!! route('hotels.show', [$hotel->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i> Visitar </a>

                            </div>
                        {!! Form::close() !!}
            </div>
       </li>    
    @endforeach
</ul>
