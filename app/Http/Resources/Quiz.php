<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\IncorrectAnswer as IncorrectAnswerResource;

class Quiz extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'question' => $this->question,
            'correct_answer' => $this->correct_answer,
            'incorrect_answers' => IncorrectAnswerResource::collection($this->incorrectanswers),
        ];
    }
}
