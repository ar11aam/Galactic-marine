<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Yamaha;
use App\Imports\YamahasImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


class yamahaController extends Controller
{
    public function index()
    {
        $yamaha = Yamaha::all();
        return view('frontend.yamaha', ['yamaha' => $yamaha]);
    }

    public function importTables(Request $request)
    {
        $request-> validate([
            'excelFile' => 'required|mimes:xlsx,csv' ,
        ]);
        Excel::import(new YamahasImport, $request->file('excelFile'));

        return redirect()->back()->with('Success','All good!');
    }

    public function search(Request $request)
    {
        $search = $request['search'] ?? "";
        if ($search != "") { 
            $yamaha = Yamaha::where("partName", "LIKE", "%$search%")->orwhere("partNum", "LIKE", "%$search%")->get();
        } else {
            $yamaha = Yamaha::all();
        }
        $data = compact('search', 'yamaha');
        return view('frontend.yamaha')->with($data);
    }
}
