<?php

namespace App\Imports;

use App\Models\Zf;
use Maatwebsite\Excel\Concerns\ToModel;

class ZfsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $bin = \DB::table('zfs')->get();
        $bin_number = $bin->pluck('partNum');
        if ($bin_number->contains($row[1]) == false) {
            return new Zf([
                'partNum' => $row[0],
                'partName' => $row[1],
            ]);
        }
    }
}
