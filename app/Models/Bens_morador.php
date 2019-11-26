<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Bens_morador
 * @package App\Models
 * @version November 25, 2019, 6:45 pm UTC
 *
 * @property integer id_bem
 * @property integer ID_Morador
 */
class Bens_morador extends Model
{

    public $table = 'bens_morador';

    public $timestamps = false;



    public $fillable = [
        'id_bem',
        'ID_Morador'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_bem' => 'integer',
        'ID_Morador' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_bem' => 'required',
        'ID_Morador' => 'required'
    ];

    public function bem_morador()
    {
        return $this->BelongsToMany(Bens::class,'id_bem');
    }
}
