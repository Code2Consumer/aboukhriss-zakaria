<?php

declare(strict_types=1);

use App\Orchid\Screens\ExperienceEditScreen;
use App\Orchid\Screens\ExperienceListScreen;
use App\Orchid\Screens\PlatformScreen;
use App\Orchid\Screens\ProjectEditScreen;
use App\Orchid\Screens\ProjectListScreen;
use App\Orchid\Screens\SkillEditScreen;
use App\Orchid\Screens\SkillListScreen;
use App\Orchid\Screens\UserEditScreen;
use App\Orchid\Screens\UserListScreen;
use Orchid\Platform\Http\Controllers\Systems\IndexController;

/*
|--------------------------------------------------------------------------
| Dashboard Web Routes
|--------------------------------------------------------------------------
|
| Base route
|
*/

// Index and default...
$this->router->get('/', [IndexController::class, 'index'])->name('index');
$this->router->fallback([IndexController::class, 'fallback']);

//$this->router->screen('search/{query}', SearchScreen::class)->name('search');
//$this->router->screen('notifications/{id?}', NotificationScreen::class)->name('notifications');
//
//$this->router->post('/api/notifications', [NotificationScreen::class, 'unreadNotification'])
//    ->name('api.notifications');

// Main
$this->router->screen('/main', PlatformScreen::class)->name('platform.main');

$this->router->screen('experience/{experience?}', ExperienceEditScreen::class)
    ->name('platform.experience.edit');
$this->router->screen('experience', ExperienceListScreen::class)
    ->name('platform.experience.list');

$this->router->screen('project/{project?}', ProjectEditScreen::class)
    ->name('platform.project.edit');
$this->router->screen('project', ProjectListScreen::class)
    ->name('platform.project.list');

$this->router->screen('skill', SkillListScreen::class)
    ->name('platform.skill.list');
$this->router->screen('skill/{skill?}', SkillEditScreen::class)
    ->name('platform.skill.edit');

$this->router->screen('user/{user?}', UserEditScreen::class)
    ->name('platform.user.edit');
$this->router->screen('user', UserListScreen::class)
    ->name('platform.user.list');