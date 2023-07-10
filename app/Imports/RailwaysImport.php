<?php

namespace App\Imports;

use App\Models\Railway;
use Maatwebsite\Excel\Concerns\ToModel;

class RailwaysImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $bin = \DB::table('railways')->get();
        $bin_number = $bin->pluck('productName');
        if ($bin_number->contains($row[1]) == false) {
            return new Railway([
                'productName' => $row[0],
                'imgFile' => $row[1],
            ]);
        }
    }
}
