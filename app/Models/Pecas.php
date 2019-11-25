<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Pecas
 * @package App\Models
 * @version November 25, 2019, 6:37 pm UTC
 *
 * @property string peca
 * @property number valor
 * @property integer id_fornecedor
 */
class Pecas extends Model
{

    public $table = 'pecas';
    
    public $timestamps = false;



    public $fillable = [
        'peca',
        'valor',
        'id_fornecedor'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'peca' => 'string',
        'valor' => 'float',
        'id_fornecedor' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'peca' => 'required',
        'valor' => 'required',
        'id_fornecedor' => 'required'
    ];

    
}
