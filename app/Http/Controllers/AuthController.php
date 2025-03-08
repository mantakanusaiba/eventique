<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);
    
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
    
        $token = JWTAuth::fromUser($user);
    
        return response()->json(['user' => $user, 'token' => $token]);
    }
    
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
        if (!$token = JWTAuth::attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    
        return $this->respondWithToken($token);
    }
    public function showAdminLoginForm()
{
    return view('auth.admin_login');
}

public function adminLogin(Request $request)
{
    $request->validate([
        'email' => 'required|string|email',
        'password' => 'required|string',
    ]);

    $adminEmail = 'admin@eventique.com';
    $adminPassword = 'admin123';

    if ($request->email === $adminEmail && $request->password === $adminPassword) {
        session(['admin_email' => $adminEmail, 'admin_password' => $adminPassword]);

        return redirect()->route('admin.dashboard');
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ]);
}
public function adminLogout(Request $request)
{
    $request->session()->forget(['admin_email', 'admin_password']);
    return redirect()->route('admin.login');
}
    public function me()
{
    return response()->json(Auth::user());
}

   
    public function logout()
    {
        Auth::logout();
        return response()->json(['message' => 'Successfully logged out']);
    }

    public function refresh(Request $request)
    {
        $refreshToken = $request->bearerToken(); 
        
        if (!$refreshToken) {
            return response()->json(['error' => 'Refresh token is required'], 400);
        }
    
        try {
            $newAccessToken = JWTAuth::refresh(JWTAuth::getToken());
            return response()->json(['access_token' => $newAccessToken]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Invalid refresh token'], 401);
        }
    }
    

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
           'expires_in' => JWTAuth::factory()->getTTL() * 60

        ]);
    }
   

}