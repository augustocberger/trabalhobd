<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Torres
 * @package App\Models
 * @version November 25, 2019, 6:38 pm UTC
 *
 * @property integer Latitude
 * @property integer Longitude
 * @property string Municipio
 * @property integer id_peca
 */
class Torres extends Model
{

    public $table = 'torre';
    
    public $timestamps = false;



    public $fillable = [
        'Latitude',
        'Longitude',
        'Municipio',
        'id_peca'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Latitude' => 'integer',
        'Longitude' => 'integer',
        'Municipio' => 'string',
        'id_peca' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Latitude' => 'required',
        'Longitude' => 'required',
        'Municipio' => 'required',
        'id_peca' => 'required'
    ];

    
}
