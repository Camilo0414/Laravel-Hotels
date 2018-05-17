<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Comentario
 * @package App\Models
 * @version May 17, 2018, 2:20 am UTC
 */
class Comentario extends Model
{
    use SoftDeletes;

    public $table = 'comentarios';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'hotel_id',
        'usuario_id',
        'calificacion',
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'hotel_id' => 'integer',
        'usuario_id' => 'integer',
        'calificacion' => 'integer',
        'descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'calificacion' => 'numeric'
    ];

    public function hotel(){
        return $this->belongsTo('App\Models\Hotel');
    }

     public function usuario(){
        return $this->belongsTo('App\User');
    }
    
}
