<?php

use App\Skill;
use Illuminate\Database\Seeder;

class ExperienceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skill::query()->truncate();
        factory(Skill::class, 10)->create();
    }
}
