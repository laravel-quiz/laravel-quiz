<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class QuizTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quiz')->insert([
            [
                'category_id' => 1,
                'question' => 'Who is the drummer of Metallica?',
                'correct_answer' => 'Lars Ulrich',
            ],
            [
                'category_id' => 1,
                'question' => 'What is the smallest bird?',
                'correct_answer' => 'Colibri',
            ],
            [
                'category_id' => 1,
                'question' => 'Mona Lis is painted by Leonardo Da Vinchi. Which nationality does he belongs to?',
                'correct_answer' => 'Italian',
            ],
            [
                'category_id' => 1,
                'question' => 'What is the main component of glass?',
                'correct_answer' => 'Sand',
            ],
            [
                'category_id' => 1,
                'question' => 'How many oscars did the movie Titanic got?',
                'correct_answer' => 11,
            ],
            [
                'category_id' => 1,
                'question' => 'Which district in Nepal has the largest production of Coffee beans?',
                'correct_answer' => 'Syanga',
            ],
            [
                'category_id' => 1,
                'question' => 'How long is the great wall of china?',
                'correct_answer' => '4000 miles',
            ],
            [
                'category_id' => 1,
                'question' => 'What is the largest number of 5 digits?',
                'correct_answer' => 99999,
            ],
            [
                'category_id' => 1,
                'question' => 'Who long is an Olympic swimming pool?',
                'correct_answer' => '50 meters',
            ],
            [
                'category_id' => 1,
                'question' => 'Who is the father of Atomic Bomb?',
                'correct_answer' => 'Robert Oppenheimer',
            ],

            
        ]);
    }
}
