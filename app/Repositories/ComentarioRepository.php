<?php

namespace App\Repositories;

use App\Models\Comentario;
use InfyOm\Generator\Common\BaseRepository;

class ComentarioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'hotel_id',
        'usuario_id',
        'calificacion',
        'descripcion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Comentario::class;
    }
}
