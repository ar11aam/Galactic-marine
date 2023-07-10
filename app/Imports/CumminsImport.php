<?php

namespace App\Imports;

use App\Models\Cummins;
use Maatwebsite\Excel\Concerns\ToModel;

class CustomersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $bin = \DB::table('cummins')->get();
        $bin_number = $bin->pluck('partNum');
        if ($bin_number->contains($row[1])  == false) {
        return new Cummins([
            'partName'   => $row[0],
            'partNum'  => $row[1],
        ]);
    }

    }
}
