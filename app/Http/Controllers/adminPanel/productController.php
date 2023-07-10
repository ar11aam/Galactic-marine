<?php

namespace App\Http\Controllers\adminPanel;
use App\Http\Controllers\Controller;
use App\Models\Cummins;
use App\Models\Marine;
use App\Models\Railway;
use App\Models\Solar;
use App\Models\Traffic;
use App\Models\Zf;
use Auth;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function index()
    {

        return view('adminPanel.products');
    }


    public function storeRailway(Request $request)
    {
        $railway = new Railway;
        $railway->productName = $request->input('productName');
        if ($request->hasFile('imgFile')) {
            $file = $request->file('imgFile');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . "." . $extension;
            $file->move('admin-panel/assets/adminImgs/', $fileName);
            $railway -> imgFile = $fileName;  
        }
        $railway -> save();
        return redirect()->back()->with('Status', 'Image added successfully.');
    }

    public function storeMarine(Request $request)
    {
        $railway = new Marine;
        $railway->productName = $request->input('productName');
        if ($request->hasFile('imgFile')) {
            $file = $request->file('imgFile');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . "." . $extension;
            $file->move('admin-panel/assets/adminImgs/', $fileName);
            $railway -> imgFile = $fileName;  
        }
        $railway -> save();
        return redirect()->back()->with('Status', 'Image added successfully.');
    }

    public function storeSolar(Request $request)
    {
        $solar = new Solar;
        $solar->productName = $request->input('productName');
        if ($request->hasFile('imgFile')) {
            $file = $request->file('imgFile');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . "." . $extension;
            $file->move('admin-panel/assets/adminImgs/', $fileName);
            $solar -> imgFile = $fileName;  
        }
        $solar -> save();
        return redirect()->back()->with('Status', 'Image added successfully.');
    }

    public function storeTraffic(Request $request)
    {
        $traffics = new Traffic;
        $traffics->productName = $request->input('productName');
        if ($request->hasFile('imgFile')) {
            $file = $request->file('imgFile');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . "." . $extension;
            $file->move('admin-panel/assets/adminImgs/', $fileName);
            $traffics -> imgFile = $fileName;  
        }
        $traffics -> save();
        return redirect()->back()->with('Status', 'Image added successfully.');
    }


    public function storeCummins(Request $request)
    {
        $cummins = new Cummins;
        $cummins->partName = $request->input('productName');
        $cummins->partNum = $request->input('productNumber');
        $cummins -> save();
        return redirect()->back()->with('Status', 'Image added successfully.');
    }

    public function storeZf(Request $request)
    {
        $cummins = new Zf;
        $cummins->partName = $request->input('productName');
        $cummins->partNum = $request->input('productNumber');
        $cummins -> save();
        return redirect()->back()->with('Status', 'Image added successfully.');
    }

    public function check(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($request->only('username','password'))) {
            return redirect('/tables');
        }
            return redirect('/login') -> withError("<h2>Invalid Username or Password!</h2>");
    }
}
