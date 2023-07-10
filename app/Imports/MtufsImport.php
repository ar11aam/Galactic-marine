<?php

namespace App\Imports;

use App\Models\Mtuf;
use Maatwebsite\Excel\Concerns\ToModel;

class MtufsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $bin = \DB::table('mtufs')->get();
        $bin_number = $bin->pluck('partNum');
        if ($bin_number->contains($row[1]) == false) {
            return new Mtuf([
                'partNum' => $row[0],
                'partName' => $row[1],
            ]);
        }
    }
}
