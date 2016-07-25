<?php

namespace App\Repositories;

use App\Models\Color;
use InfyOm\Generator\Common\BaseRepository;

class ColorRepository extends BaseRepository
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
        return Color::class;
    }
}
