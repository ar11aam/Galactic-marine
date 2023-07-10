<?php

namespace App\Imports;

use App\Models\Solar;
use Maatwebsite\Excel\Concerns\ToModel;

class solarsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $bin = \DB::table('solars')->get();
        $bin_number = $bin->pluck('productName');
        if ($bin_number->contains($row[1]) == false) {
            return new Solar([
                'productName' => $row[0],
                'imgFile' => $row[1],
            ]);
        }
    }
}
