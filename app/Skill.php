<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Interfaces\Templatable as TemplatableInterface;

class Skill extends Model implements TemplatableInterface
{
    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
//        'delayed' => false,
    ];

    /**
     * @return mixed
     */
    public function getTemplateData()
    {
        return self::all();
    }
}