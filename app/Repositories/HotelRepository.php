<?php

namespace App\Repositories;

use App\Models\Hotel;
use InfyOm\Generator\Common\BaseRepository;

class HotelRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'costo',
        'estrellas',
        'ubicacion',
        'ciudad'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Hotel::class;
    }
}
