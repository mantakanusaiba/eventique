<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CustomAuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    public function registration()
    {
        return view("auth.registration");
    }

    public function registerUser(Request $request)
    {
        
        $request->validate([
            'name' => 'required',
            
            'email' => 'required|email|unique:users',
            'password' => 'required|min:2|max:12',
        ]);

        
        $user = new User();
        $user->name = $request->name;
        
        $user->email = $request->email;
        $user->password = Hash::make($request->password); 
        $res = $user->save();

        
        if ($res) {
            return redirect('login')->with('success', 'You have registered successfully');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
    }

    public function loginUser(Request $request)
{
    
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:2|max:12',
    ]);

    
    $user = User::where('email', '=', $request->email)->first();

    if ($user) {
        
        if (Hash::check($request->password, $user->password)) {
            $request->session()->put('loginId', $user->id);
            return redirect('dashboard'); 
        } else {
            return back()->with('fail', 'Incorrect password');
        }
    } else {
        
        return back()->with('fail', 'This email is not registered');
    }
}
public function dashboard()
{
    return view('dashboard');

}

}
