<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\Excel_RecentPlayer;
use App\Exports\Excel_TopPlayer;
use App\Imports\QuestionImport;
use Maatwebsite\Excel\Facades\Excel;

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

    public function upload_question()
    {
        $rows = Excel::toCollection(new QuestionImport, 'C:\Users\Rukesh\Downloads\topplayer.xlsx');
        dd($rows);
    }
}
