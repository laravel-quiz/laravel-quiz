<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class IncorrectAnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('incorrect_answers')->insert([
            [
                'quiz_id' => 1,
                'answer' => 'Travis Barker',
            ],
            [
                'quiz_id' => 1,
                'answer' => 'John Bon Ham',
            ],
            [
                'quiz_id' => 1,
                'answer' => 'Buddy Rich',
            ],
            [
                'quiz_id' => 2,
                'answer' => 'Humming Bird',
            ],
            [
                'quiz_id' => 2,
                'answer' => 'Sparrow',
            ],
            [
                'quiz_id' => 2,
                'answer' => 'Gold Crest',
            ],
            [
                'quiz_id' => 3,
                'answer' => 'Spanish',
            ],
            [
                'quiz_id' => 3,
                'answer' => 'Austrian',
            ],
            [
                'quiz_id' => 3,
                'answer' => 'French',
            ],
            [
                'quiz_id' => 4,
                'answer' => 'Hydrogen',
            ],
            [
                'quiz_id' => 4,
                'answer' => 'Glue',
            ],
            [
                'quiz_id' => 4,
                'answer' => 'Phosphorous',
            ],
            [
                'quiz_id' => 5,
                'answer' => 7,
            ],
            [
                'quiz_id' => 5,
                'answer' => 9,
            ],
            [
                'quiz_id' => 5,
                'answer' => 5,
            ],
            [
                'quiz_id' => 6,
                'answer' => 'Bhaktapur',
            ],
            [
                'quiz_id' => 6,
                'answer' => 'Gulmi',
            ],
            [
                'quiz_id' => 6,
                'answer' => 'Illam',
            ],
            [
                'quiz_id' => 7,
                'answer' => '3800 miles',
            ],
            [
                'quiz_id' => 7,
                'answer' => '4172 miles',
            ],
            [
                'quiz_id' => 7,
                'answer' => '3901 miles',
            ],
            [
                'quiz_id' => 8,
                'answer' => 10000,
            ],
            [
                'quiz_id' => 8,
                'answer' => 100000,
            ],
            [
                'quiz_id' => 8,
                'answer' => 11111,
            ],
            [
                'quiz_id' => 9,
                'answer' => '45 meters',
            ],
            [
                'quiz_id' => 9,
                'answer' => '55 meters',
            ],
            [
                'quiz_id' => 9,
                'answer' => '60 meters',
            ],
            [
                'quiz_id' => 10,
                'answer' => 'Albert Einstein',
            ],
            [
                'quiz_id' => 10,
                'answer' => 'Oscar Del Grando',
            ],
            [
                'quiz_id' => 10,
                'answer' => 'Father Henry Garnet',
            ],

            
        ]);
    }
}
