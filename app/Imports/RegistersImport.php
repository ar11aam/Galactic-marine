<?php

namespace App\Imports;

use App\Models\Register;
use Maatwebsite\Excel\Concerns\ToModel;
use Hash;

class RegistersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $bin = \DB::table('registers')->get();
        $bin_number = $bin->pluck('email');
        if ($bin_number->contains($row[1])  == false) {
        return new Register([
            'username'   => $row[0],
            'email'  => $row[1],
            'password'  => Hash::make($row[2]),
        ]);
    }
}
}
