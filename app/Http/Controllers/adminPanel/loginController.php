<?php

namespace App\Http\Controllers\adminPanel;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class loginController extends Controller
{
    public function index()
    {
        return view('frontend.login');
    }

    public function register()
    {
        return view('adminPanel.register');
    }

    public function admin()
    {
        $admins = DB::table('users')->select('id','name','email')->get();
        return view('adminPanel.makeAdmin')->with('admin', $admins);
    }

    public function destroyAdmin($id)
    {
        $admin = User::whereId($id)->first();
        $admin->delete();

        return redirect('/admin');
    }

    public function registerForm(Request $request)
    {
        // Check if the number of admins exceeds the limit
        $adminsCount = User::where('is_admin', true)->count();
        if ($adminsCount >= 2) {
            return back()->with('error', "Can't add more than 2 admins.");
        }

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|max:12|min:5'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->is_admin = true; // Assuming this field determines if the user is an admin
        $save = $user->save();

        if ($save) {
            $request->session()->put('loginId', $user->id);
            return redirect('/tables')->with('success', 'You have registered successfully.');
        } else {
            return back()->with('error', 'Something went wrong.');
        }
    }


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|max:12|min:5'
        ]);

        $user = User::where('email', '=', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('loginId', $user->id);
                return redirect('/tables')->with('success', 'Logged In Successfully.');
            } else {
                return back()->with('fail', 'Wrong Password Entered.');
            }
        } else {
            return back()->with('fail', 'This Email is not registered.');
        }
    }

    public function logout()
    {
        if (Session::has('loginId')) {
            Session::pull('loginId');
            return redirect('/');
        }
    }
}