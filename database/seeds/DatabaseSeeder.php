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
        $this->call([
            RolesTableSeeder::class,
            CategoryTableSeeder::class,
        	UsersTableSeeder::class,
            QuizTableSeeder::class,
            IncorrectAnswersTableSeeder::class,
            SettingsTableSeeder::class,
        ]);
    }
}
