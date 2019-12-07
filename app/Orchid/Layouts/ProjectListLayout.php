<?php

namespace App\Orchid\Layouts;

use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class ProjectListLayout extends Table
{
    /**
     * Data source.
     *
     * @var string
     */
    protected $target = '';

    /**
     * @return TD[]
     */
    protected function columns(): array
    {
        return [];
    }
}
