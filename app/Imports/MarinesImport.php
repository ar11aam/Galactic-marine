<?php

namespace App\Imports;

use App\Models\Marine;
use Maatwebsite\Excel\Concerns\ToModel;

class MarinesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $bin = \DB::table('marines')->get();
        $bin_number = $bin->pluck('productName');
        if ($bin_number->contains($row[1]) == false) {
            return new Marine([
                'productName' => $row[0],
                'img' => $row[1],
            ]);
        }
    }
}
