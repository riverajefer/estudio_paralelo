<?php

namespace App\Repositories;

use App\Models\Estilo;
use InfyOm\Generator\Common\BaseRepository;

class EstiloRepository extends BaseRepository
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
        return Estilo::class;
    }
}
