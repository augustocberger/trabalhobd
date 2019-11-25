<?php

namespace App\Repositories;

use App\Models\Pecas;
use App\Repositories\BaseRepository;

/**
 * Class PecasRepository
 * @package App\Repositories
 * @version November 25, 2019, 6:37 pm UTC
*/

class PecasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'peca',
        'valor',
        'id_fornecedor'
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
        return Pecas::class;
    }
}
