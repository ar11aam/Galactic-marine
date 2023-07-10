<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Traffic;
use Illuminate\Http\Request;
use DB;

class trafficController extends Controller
{
    public function index()
    {
        $traffic = Traffic::all();
        return view('frontend.traffic', ['traffic' => $traffic]);
    }

    public function search(Request $request)
    {
        $search = $request['search'] ?? "";
        if ($search != "") { 
            $traffic = Traffic::where("productName", "LIKE", "%$search%")->get();
        } else {
            $traffic = Traffic::all();
        }
        $data = compact('traffic', 'search');
        return view('frontend.traffic')->with($data);
    }

    public function destroyTraffic($id)
    {
        $traffic = Traffic::whereId($id)->first();
        $traffic->delete();

        return redirect('/homeProducts');
    }
}
