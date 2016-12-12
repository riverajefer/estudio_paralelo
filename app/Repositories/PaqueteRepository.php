<?php

namespace App\Repositories;

use App\Models\Paquete;
use InfyOm\Generator\Common\BaseRepository;

class PaqueteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'titulo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Paquete::class;
    }
}
