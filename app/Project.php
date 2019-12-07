<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Interfaces\Templatable as TemplatableInterface;
use Orchid\Screen\AsSource;

class Project extends Model implements TemplatableInterface
{
    use AsSource;

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
    ];

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