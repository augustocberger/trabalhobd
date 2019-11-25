<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Bens
 * @package App\Models
 * @version November 25, 2019, 6:33 pm UTC
 *
 * @property string bem
 */
class Bens extends Model
{

    public $table = 'bens';
    
    public $timestamps = false;



    public $fillable = [
        'bem'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'bem' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'bem' => 'required'
    ];

    
}
