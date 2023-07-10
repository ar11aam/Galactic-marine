<?php

namespace App\Http\Controllers\frontend;

use App\Models\Kohler;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\KohlersImport;
use Maatwebsite\Excel\Facades\Excel;

class kohlerController extends Controller
{
    public function index()
    {
        $new = Kohler::all();
        return view('frontend.kohler', ['kohlers' => $new]);
    }
    public function importTables(Request $request)
    {
        $request-> validate([
            'excelFile' => 'required|mimes:xlsx,csv' ,
        ]);
        Excel::import(new KohlersImport, $request->file('excelFile'));

        return redirect()->back()->with('Success','All good!');
    }

    public function search(Request $request)
    {
        $search = $request['search'] ?? "";
        if ($search != "") { 
            $kohlers = Kohler::where("partName", "LIKE", "%$search%")->orwhere("partNum", "LIKE", "%$search%")->get();
        } else {
            $kohlers = Kohler::all();
        }
        $data = compact('search', 'kohlers');
        return view('frontend.kohler')->with($data);
    }
}
