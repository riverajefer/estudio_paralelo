<?php

namespace App\Repositories;

use App\Models\Espacio;
use InfyOm\Generator\Common\BaseRepository;

class EspacioRepository extends BaseRepository
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
        return Espacio::class;
    }
}
