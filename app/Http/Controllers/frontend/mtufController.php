<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Imports\MtufsImport;
use App\Models\Mtuf;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class mtufController extends Controller
{
    public function index()
    {
        $customers = Mtuf::all();
        // dd($customers);
        return view('frontend.mtuf', ['mtuf' => $customers]);
    }

    public function importTables(Request $request)
    {
        $request-> validate([
            'excelFile' => 'required|mimes:xlsx,csv' ,
        ]);
        Excel::import(new MtufsImport, $request->file('excelFile'));

        return redirect()->back()->with('Success','All good!');
    }

    public function search(Request $request)
    {
        $search = $request['search'] ?? "";
        if ($search != "") { 
            $mtuf = Mtuf::where("partName", "LIKE", "%$search%")->orwhere("partNum", "LIKE", "%$search%")->get();
        } else {
            $mtuf = Mtuf::all();
        }
        $data = compact('mtuf', 'search');
        return view('frontend.mtuf')->with($data);
    }
};