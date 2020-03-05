<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\Excel_RecentPlayer;
use App\Exports\Excel_TopPlayer;
use App\Imports\QuestionImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Filesystem\Filesystem;
use Intervention\Image\Facades\Image;

use App\Quiz;
use App\IncorrectAnswer;

class ExcelController extends Controller
{
    public function recentplayer()
    {
        return Excel::download(new Excel_RecentPlayer, 'recentplayer.xlsx');
    }

    public function topplayer()
    {
        return Excel::download(new Excel_TopPlayer, 'topplayer.xlsx');
    }

    public function upload_question(Request $request)
    {
             $file = $request->file('question');

            //File Name
            $file->getClientOriginalName();

            //Display File Extension
            $file->getClientOriginalExtension();

            //Display File Real Path
            $file->getRealPath();

            //Display File Size
            $file->getSize();

            //Display File Mime Type
            $file->getMimeType();

            //Move Uploaded File
            $destinationPath = public_path('file');
            $file->move($destinationPath,$file->getClientOriginalName());
        //dd();
        //
        $path = public_path('file/'. $file->getClientOriginalName());

        $rows = Excel::toArray(new QuestionImport, $path);

         //$quiz = new Quiz();

        //dd(($rows[0][1][2]));

        for($i=1; $i<=count($rows[0])-1; $i++)
        {
            // $quiz->question = $rows[0][$i][1];
            // $quiz->correct_answer = $rows[0][$i][2];

            $temp = explode(',',$rows[0][$i][2]);
            $incorrect_answers = array_map('trim',$temp);
            //dd($incorrect_answers);
            $quiz = new Quiz();
            $quiz->category_id = 1;
            $quiz->question = $rows[0][$i][0];
            $quiz->correct_answer = $rows[0][$i][1];
            $quiz->save();
            foreach($incorrect_answers as $ia){
                $incorrectanswer = new IncorrectAnswer(['answer'=> $ia]);
                $quiz->incorrectanswers()->save($incorrectanswer);
            }


        }
        return redirect()->route('questionanswer');
        //dd($quiz,$incorrectanswer);
    }
}
