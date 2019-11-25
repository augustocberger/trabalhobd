<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Fornecedores
 * @package App\Models
 * @version November 25, 2019, 6:34 pm UTC
 *
 * @property string papel
 * @property string cnpj
 * @property string raz_social
 * @property string endereco
 * @property string telefone
 */
class Fornecedores extends Model
{

    public $table = 'fornecedor';
    
    public $timestamps = false;



    public $fillable = [
        'papel',
        'cnpj',
        'raz_social',
        'endereco',
        'telefone'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'papel' => 'string',
        'cnpj' => 'string',
        'raz_social' => 'string',
        'endereco' => 'string',
        'telefone' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'papel' => 'required',
        'cnpj' => 'required',
        'raz_social' => 'required',
        'endereco' => 'required',
        'telefone' => 'required'
    ];

    
}
