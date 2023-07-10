<?php

namespace App\Imports;

use App\Models\Kohler;
use Maatwebsite\Excel\Concerns\ToModel;

class KohlersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $bin = \DB::table('kohlers')->get();
        $bin_number = $bin->pluck('partNum');
        if ($bin_number->contains($row[1]) == false) {
            return new Kohler([
                'partNum' => $row[0],
                'partName' => $row[1],
            ]);
        }
    }
}
