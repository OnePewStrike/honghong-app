<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view("login");
    }
    public function registration()
    {
        return view("registration");
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:user',
            'password' => 'required',
        ]);

        $username = $request->username;
        $password = Hash::make($request->password);

        $user = new User();
        $user->username = $username;
        $user->password = $password;
        $res = $user->save();

        if ($res) {
            return back()->with('success', 'Success: You have registered successfully');
        } else {
            return back()->with('fail', 'Error: An error occurred please try again');
        }
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('username', '=', $request->username)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('loginId', $user->id);
                return redirect('home');
            } else {
                return back()->with('fail', 'Error: This password is not matched.');
            }
        } else {
            return back()->with('fail', 'Error: This username is not registered.');
        }
    }

    public function about()
    {
        $data = array();
        if (Session::has('loginId')) {
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }
        return view("about", compact('data'));
    }

    public function logout()
    {
        if (Session::has('loginId')) {
            Session::pull('loginId');
            return redirect('login');
        }
    }

    public function home()
    {
        return view("home");
    }

    public function main()
    {
        return view("main");
    }

    public function contact()
    {
        return view("contact");
    }

    public function categories()
    {
        return view("categories");
    }

    public function faq()
    {
        return view("faq");
    }

    public function viewPost()
    {
        return view("view-post");
    }

    public function profilePage()
    {
        return view("profile-page");
    }
}
