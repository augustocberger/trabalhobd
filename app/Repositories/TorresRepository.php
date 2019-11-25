<?php

namespace App\Repositories;

use App\Models\Torres;
use App\Repositories\BaseRepository;

/**
 * Class TorresRepository
 * @package App\Repositories
 * @version November 25, 2019, 6:38 pm UTC
*/

class TorresRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Latitude',
        'Longitude',
        'Municipio',
        'id_peca'
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
        return Torres::class;
    }
}
