<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeTemplateController extends Controller
{
    //
    /**
     * Builds {{ name }} template
     *
     * @return \Illuminate\View\View
     */
    public function getTemplate($name)
    {
        return view('templates.'.$name);
    }
}
