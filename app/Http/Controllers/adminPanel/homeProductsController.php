<?php

namespace App\Http\Controllers\adminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Marine;
use Illuminate\Support\Facades\DB;

class homeProductsController extends Controller
{
    public function index()
    {   
        $marine = DB::table('marines')->select('id','productName','imgFile')->get();
        $railway = DB::table('railways')->select('id','productName','imgFile')->get();
        $solar = DB::table('solars')->select('id','productName','imgFile')->get();
        $traffic = DB::table('traffic')->select('id','productName','imgFile')->get();
        return view('adminPanel.homeProducts')->with('marine', $marine)->with('railway', $railway)->with('solar', $solar)->with('traffic', $traffic);
    }

    public function index1()
    {   
        $cummins = DB::table('cummins')->select('id','partNum','partName')->get();
        $zfs = DB::table('zfs')->select('id','partNum','partName')->get();
        return view('adminPanel.homeEntry')->with('cummin', $cummins)->with('zf', $zfs);
    }
}
