<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Imports\VolvosImport;
use App\Models\Volvo;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class volvoController extends Controller
{
    public function index()
    {
        $volvos = Volvo::all();
        return view('frontend.volvo', ['volvo' => $volvos]);
    }

    public function importTables(Request $request)
    {
        $request-> validate([
            'excelFile' => 'required|mimes:xlsx,csv' ,
        ]);
        Excel::import(new VolvosImport, $request->file('excelFile'));

        return redirect()->back()->with('success','All good!');
    }

    public function search(Request $request)
    {
        $search = $request['search'] ?? "";
        if ($search != "") { 
            $volvo = Volvo::where("partName", "LIKE", "%$search%")->orwhere("partNum", "LIKE", "%$search%")->get();
        } else {
            $volvo = Volvo::all();
        }
        $data = compact('volvo', 'search');
        return view('frontend.volvo')->with($data);
    }

}