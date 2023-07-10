<?php

namespace App\Imports;

use App\Models\Traffic;
use Maatwebsite\Excel\Concerns\ToModel;

class TrafficsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $bin = \DB::table('traffics')->get();
        $bin_number = $bin->pluck('productName');
        if ($bin_number->contains($row[1]) == false) {
            return new Traffic([
                'productName' => $row[0],
                'imgFile' => $row[1],
            ]);
        }
    }
}
