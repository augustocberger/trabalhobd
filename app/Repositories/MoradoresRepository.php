<?php

namespace App\Repositories;

use App\Models\Moradores;
use App\Repositories\BaseRepository;

/**
 * Class MoradoresRepository
 * @package App\Repositories
 * @version November 25, 2019, 6:34 pm UTC
*/

class MoradoresRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cpf',
        'nome',
        'endereco',
        'telefone'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Moradores::class;
    }
}
