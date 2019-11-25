<?php

namespace App\Repositories;

use App\Models\Bens_morador;
use App\Repositories\BaseRepository;

/**
 * Class Bens_moradorRepository
 * @package App\Repositories
 * @version November 25, 2019, 6:45 pm UTC
*/

class Bens_moradorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_bem',
        'ID_Morador'
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
        return Bens_morador::class;
    }
}
