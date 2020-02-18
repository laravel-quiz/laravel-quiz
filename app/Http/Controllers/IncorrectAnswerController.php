<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IncorrectAnswer;
use App\Quiz;

class IncorrectAnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incorrectans = IncorrectAnswer::get();
        return view('admin.incorrectanswer.index',compact('incorrectans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $quizes = Quiz::get();
        return view('admin.incorrectanswer.create',compact('quizes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $quiz = new IncorrectAnswer();
        $quiz->answer = $request->answer;
        $quiz->quiz_id = $request->quiz_id;
        $quiz->save();
        return redirect()->route('incorrectanswer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.incorrectanswer.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $incorrectans = IncorrectAnswer::findOrfail($id);
        $quizes = Quiz::get();
        return view("admin.incorrectanswer.edit",compact('incorrectans','quizes'));
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
        $quiz = IncorrectAnswer::findOrfail($id);
        $quiz->answer = $request->answer;
        $quiz->quiz_id = $request->quiz_id;
        $quiz->save();
        return redirect()->route('incorrectanswer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $incorrectans = IncorrectAnswer::findOrfail($id);
        $incorrectans->delete();
        return redirect()->route('incorrectanswer');
    }
}
