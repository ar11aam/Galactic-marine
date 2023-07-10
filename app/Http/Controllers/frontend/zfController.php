<?php

namespace App\Http\Controllers\frontend;
use App\Imports\zfsImport;
use App\Models\Zf;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class zfController extends Controller
{
    public function index()
    {
        $new = Zf::all();
        return view('frontend.zf', ['zf' => $new]);
    }

    public function search(Request $request)
    {
        $search = $request['search'] ?? "";
        if ($search != "") { 
            $zf = Zf::where("partName", "LIKE", "%$search%")->orwhere("partNum", "LIKE", "%$search%")->get();
        } else {
            $zf = Zf::all();
        }
        $data = compact('search', 'zf');
        return view('frontend.zf')->with($data);
    }

    public function importTables(Request $request)
    {
        $request-> validate([
            'excelFile' => 'required|mimes:xlsx,csv' ,
        ]);
        Excel::import(new zfsImport, $request->file('excelFile'));

        return redirect()->back()->with('Success','All good!');
    }

    public function destroyZfs($id)
    {
        $zf = Zf::whereId($id)->first();
        $zf->delete();

        return redirect('/homeEntries');
    }
}
