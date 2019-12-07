<?php

namespace App\Orchid\Screens;

use App\Orchid\Layouts\SkillListLayout;
use App\Skill;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class SkillListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'SkillListScreen';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'SkillListScreen';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'skills' => Skill::paginate(15)
        ];
    }

    /**
     * Button commands.
     *
     * @return Link[]
     */
    public function commandBar(): array
    {
        return [
            Link::make('Create new')
                ->icon('icon-pencil')
                ->route('platform.post.edit')
        ];
    }

    /**
     * Views.
     *
     * @return Layout[]
     */
    public function layout(): array
    {
        return [
            SkillListLayout::class
        ];
    }
}
