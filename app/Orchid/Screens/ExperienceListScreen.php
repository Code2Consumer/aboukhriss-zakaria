<?php

namespace App\Orchid\Screens;

use App\Experience;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;

class ExperienceListScreen extends Table
{
    /**
     * Data source.
     *
     * @var string
     */
    public $target = 'posts';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::set('title', 'Title')
                ->render(function (Experience $post) {
                    return Link::make($post->title)
                        ->route('platform.post.edit', $post);
                }),

            TD::set('created_at', 'Created'),
            TD::set('updated_at', 'Last edit'),
        ];
    }
}
