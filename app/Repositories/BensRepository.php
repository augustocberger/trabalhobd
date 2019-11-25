<?php

namespace App\Repositories;

use App\Models\Bens;
use App\Repositories\BaseRepository;

/**
 * Class BensRepository
 * @package App\Repositories
 * @version November 25, 2019, 6:33 pm UTC
*/

class BensRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'bem'
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
        return Bens::class;
    }
}
