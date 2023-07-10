<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Solar;
use Illuminate\Http\Request;

class solarController extends Controller
{
    public function index()
    {
        $solar = Solar::all();
        return view('frontend.solar', ['solar' => $solar]);
    }

    public function search(Request $request)
    {
        $search = $request['search'] ?? "";
        if ($search != "") { 
            $solar = Solar::where("productName", "LIKE", "%$search%")->get();
        } else {
            $solar = Solar::all();
        }
        $data = compact('solar', 'search');
        return view('frontend.solar')->with($data);
    }

    public function destroySolar($id)
    {
        $solar = Solar::whereId($id)->first();
        $solar->delete();

        return redirect('/homeProducts');
    }
}
