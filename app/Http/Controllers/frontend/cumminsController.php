<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Cummins;
use App\Models\Marine;

class cumminsController extends Controller
{
    public function index()
    {
        $customers = Cummins::all();
        $marines = Marine::all();
        return view('frontend.category', ['customers' => $customers], ['marines' => $marines]);
    }

    public function search(\Illuminate\Http\Request $request)
    {
        $search = $request['search'] ?? "";
        if ($search != "") {
            $customers = Cummins::where("partName", "LIKE", "%$search%")->orwhere("partNum", "LIKE", "%$search%")->get();
            $marines = Marine::where("productName", "LIKE", "%$search%")->get();
        } else {
            $customers = Cummins::all();
            $marines = Marine::all();
        }
        $data = compact('customers', 'marines', 'search');
        return view('frontend.category')->with($data);
    }

    public function destroyMarine($id)
    {
        $marine = Marine::whereId($id)->first();
        $marine->delete();

        return redirect('/homeProducts');
    }

    public function destroyCummins($id)
    {
        $cummins = Cummins::whereId($id)->first();
        $cummins->delete();

        return redirect('/homeEntries');
    }
}
