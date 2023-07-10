<?php

namespace App\Imports;

use App\Models\Volvo;
use Maatwebsite\Excel\Concerns\ToModel;

class VolvosImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $bin = \DB::table('volvos')->get();
        $bin_number = $bin->pluck('partNum');
        if ($bin_number->contains($row[1]) == false) {
            return new Volvo([
                'partNum' => $row[0],
                'partName' => $row[1],
            ]);
        }
    }
}
