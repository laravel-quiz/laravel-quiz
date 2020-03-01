<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class QuestionImport implements ToCollection
{
    /**
    * @param Collection $collection
    */

    public function collection(Collection $rows)
    {
        // $data = [];
        // foreach ($rows as $row)
        // {
        //     $data[0] = $row[0];
        //     $data[1] = $row[1];
        // }
        return $rows;
    }

}
