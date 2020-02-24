<?php

namespace App\Services;
use App\Quiz;
use App\IncorrectAnswer;

class QuestionAnswerServices
{
    public function __construct(Quiz $quiz)
    {
        $this->quiz = $quiz;
    }

    public function get()
    {
        return $this->quiz->get();
    }
    public function store($request)
    {
        $temp = explode(',',$request['incorrect_answer']);
        $incorrect_answers = array_map('trim',$temp);
        
        // $quiz = Quiz::findOrfail($id);
        // $quiz->category_id = $request->category_id;
        // $quiz->question = $request->question;
        // $quiz->correct_answer = $request->correct_answer;
        // $quiz->save();
         $this->quiz->create($request);
         foreach($incorrect_answers as $ia){
            $incorrectanswer = new IncorrectAnswer(['answer'=> $ia]);
            $quiz->incorrectanswers()->save($incorrectanswer);
        }
        
    }
}