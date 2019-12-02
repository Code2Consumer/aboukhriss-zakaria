<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Interfaces\Templatable as TemplatableInterface;

class Experience extends Model implements TemplatableInterface
{
    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @return mixed
     */
    public function getTemplateData()
    {
        return self::all();
    }
}