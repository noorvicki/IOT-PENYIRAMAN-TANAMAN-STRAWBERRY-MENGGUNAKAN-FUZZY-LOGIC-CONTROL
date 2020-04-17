<?php

namespace App\Repositories;

use App\Models\Sensor;
use App\Repositories\BaseRepository;

/**
 * Class SensorRepository
 * @package App\Repositories
 * @version April 17, 2020, 1:52 am UTC
*/

class SensorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'kelembaban',
        'suhu',
        'ph'
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
        return Sensor::class;
    }
}
