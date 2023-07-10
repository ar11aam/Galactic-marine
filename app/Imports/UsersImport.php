<?php

namespace App\Imports;

use App\Imports\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $bin = \DB::table('users')->get();
        $bin_number = $bin->pluck('email');
        if ($bin_number->contains($row[1])  == false) {
        return new User([
            'name'   => $row[0],
            'email'  => $row[1],
            'password'  => $row[2]
        ]);
    }
    else null; 
    }
}
