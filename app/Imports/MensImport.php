<?php

namespace App\Imports;

use App\Models\Men;
use Maatwebsite\Excel\Concerns\ToModel;

class MensImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $bin = \DB::table('mens')->get();
        $bin_number = $bin->pluck('partNum');
        if ($bin_number->contains($row[1]) == false) {
            return new Men([
                'partName' => $row[0],
                'partNum' => $row[1],
            ]);
        }
    }
}