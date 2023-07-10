<?php

namespace App\Http\Controllers\frontend;

use App\Models\Men;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\MensImport;
use Maatwebsite\Excel\Facades\Excel;

class manController extends Controller
{
    public function index()
    {
        $new = Men::all();
        return view('frontend.man', ['mens' => $new]);
    }
    public function importTables(Request $request)
    {
        $request-> validate([
            'excelFile' => 'required|mimes:xlsx,csv' ,
        ]);
        Excel::import(new MensImport, $request->file('excelFile'));

        return redirect()->back()->with('Success','All good!');
    }

    public function search(Request $request)
    {
        $search = $request['search'] ?? "";
        if ($search != "") { 
            $mens = Men::where("partName", "LIKE", "%$search%")->orwhere("partNum", "LIKE", "%$search%")->get();
        } else {
            $mens = Men::all();
        }
        $data = compact('search', 'mens');
        return view('frontend.man')->with($data);
    }
};