<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Railway;
use Illuminate\Http\Request;

class railwayController extends Controller
{
    public function index()
    {
        $railway = Railway::all();
        return view('frontend.railways', ['railway' => $railway]);
    }

    public function search(Request $request)
    {
        $search = $request['search'] ?? "";
        if ($search != "") { 
            $railway = Railway::where("productName", "LIKE", "%$search%")->get();
        } else {
            $railway = Railway::all();
        }
        $data = compact('railway', 'search');
        return view('frontend.railways')->with($data);
    }

    public function destroyRailway($id)
    {
        $railway = Railway::whereId($id)->first();
        $railway->delete();

        return redirect('/homeProducts');
    }
}
