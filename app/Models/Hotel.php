<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Comentario;

/**
 * Class Hotel
 * @package App\Models
 * @version May 17, 2018, 2:17 am UTC
 */
class Hotel extends Model
{
    use SoftDeletes;

    public $table = 'hotels';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'costo',
        'estrellas',
        'ubicacion',
        'ciudad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'costo' => 'integer',
        'estrellas' => 'integer',
        'ubicacion' => 'string',
        'ciudad' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'costo' => 'numeric',
        'estrellas' => 'numeric'
    ];
    
    public function comentarios(){
        return $this->hasMany('App\Models\Comentario');
    }

    
}
