<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Excel_TopPlayer implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::orderBy('score','desc')->take(3)->get(['name','email', 'score', 'updated_at']);
    }

     public function headings(): array
    {
        return [
            'Name',
            'Email',
            'Score',
            'Played In'
        ];
    }
}
