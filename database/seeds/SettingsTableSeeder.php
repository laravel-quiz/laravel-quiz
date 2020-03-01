<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            [
                'name' => 'question-quantity',
                'value' => '5',
            ],
            [
                'name' => 'color-mode',
                'value' => 'light',
            ],
            [
                'name' => 'min-correct-question',
                'value' => '3',
            ]
            
        ]);
    }
}
