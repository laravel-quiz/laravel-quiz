<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Quiz;
use App\IncorrectAnswer;

class QuestionAnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 
    public function index()
    {
        $quizes = $this->quiz->get();
        return view('admin.questionanswer.index',compact('quizes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.questionanswer.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $temp = explode(',',$request->incorrect_answer);
        $incorrect_answers = array_map('trim',$temp);
        //dd($incorrect_answers);
        $quiz = new Quiz();
        $quiz->category_id = $request->category_id;
        $quiz->question = $request->question;
        $quiz->correct_answer = $request->correct_answer;
        $quiz->save();
        foreach($incorrect_answers as $ia){
            $incorrectanswer = new IncorrectAnswer(['answer'=> $ia]);
            $quiz->incorrectanswers()->save($incorrectanswer);
        }
        return redirect()->route('questionanswer');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.questionanswer.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $questionanswer = Quiz::findOrfail($id);
        $incorrectanswer = IncorrectAnswer::where('quiz_id',$id)->get();
        return view('admin.questionanswer.edit',compact('categories','questionanswer','incorrectanswer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $temp = explode(',',$request->incorrect_answer);
        $incorrect_answers = array_map('trim',$temp);
        //dd($incorrect_answers);
        $quiz = Quiz::findOrfail($id);
        $quiz->category_id = $request->category_id;
        $quiz->question = $request->question;
        $quiz->correct_answer = $request->correct_answer;
        $quiz->save();
        foreach($incorrect_answers as $ia){
            $incorrectanswer = new IncorrectAnswer(['answer'=> $ia]);
            $quiz->incorrectanswers()->save($incorrectanswer);
        }
        return redirect()->route('questionanswer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $quiz = Quiz::findOrfail($id);
        $quiz->delete();
        return redirect()->route('questionanswer');
    }
}
