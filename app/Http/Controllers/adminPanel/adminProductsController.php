<?php

namespace App\Http\Controllers\adminPanel;

use App\Http\Controllers\Controller;

class adminProductsController extends Controller
{
    public function index()
    {
        return view('adminPanel.tables');
    }
    

}
