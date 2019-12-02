<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(SkillTableSeeder::class);
         $this->call(StudyTableSeeder::class);
         $this->call(ProjectTableSeeder::class);
         $this->call(ExperienceTableSeeder::class);
    }
}
