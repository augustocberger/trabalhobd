<?php

namespace App\Repositories;

use App\Models\Fornecedores;
use App\Repositories\BaseRepository;

/**
 * Class FornecedoresRepository
 * @package App\Repositories
 * @version November 25, 2019, 6:34 pm UTC
*/

class FornecedoresRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'papel',
        'cnpj',
        'raz_social',
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
        return Fornecedores::class;
    }
}
