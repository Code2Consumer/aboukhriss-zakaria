<?php

namespace App\Http\Controllers;

use App\Experience;
use App\Interfaces\Templatable;
use App\Project;
use App\Skill;
use App\Study;
use function get_class;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class BladeTemplateController extends Controller
{
    //
    private $classMapping = [
        'contact' => null,
        'skill' => Skill::class,
        'experience' => Experience::class,
        'project' => Project::class,
    ];

    /**
     * Builds {{ name }} template
     *
     * @return \Illuminate\View\View
     */
    public function getTemplate($name)
    {
        $className = $this->classMapping[$name];
        $data = null;
        if ($className) {
            /* @var $templatable Templatable */
            $templatable = new $className();
            $data = $templatable->getTemplateData();
        }

        return view('templates.' . $name,
            [
                'data' => $data
            ]);
    }
}
