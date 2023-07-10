<?php

namespace App\Imports;

use App\Models\Yamaha;
use Maatwebsite\Excel\Concerns\ToModel;

class YamahasImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $bin = \DB::table('yamahas')->get();
        $bin_number = $bin->pluck('partNum');
        if ($bin_number->contains($row[1]) == false) {
            return new Yamaha([
                'partNum' => $row[0],
                'partName' => $row[1],
            ]);
        }
    }
};