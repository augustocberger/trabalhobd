<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Moradores
 * @package App\Models
 * @version November 25, 2019, 6:34 pm UTC
 *
 * @property integer cpf
 * @property string nome
 * @property string endereco
 * @property string telefone
 */
class Moradores extends Model
{

    public $table = 'moradores';

    public $timestamps = false;



    public $fillable = [
        'cpf',
        'nome',
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
        'cpf' => 'string',
        'nome' => 'string',
        'endereco' => 'string',
        'telefone' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'cpf' => 'required',
        'nome' => 'required',
        'endereco' => 'required'
    ];


}
