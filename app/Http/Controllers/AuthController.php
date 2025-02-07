<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    /**
     * Register a new user
     */
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            //'phone' => 'required|string|max:20|unique:users',
            'password' => 'required|string|min:6',
        ]);
    
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
           // 'phone' => $request->phone,
            'password' => bcrypt($request->password),
        ]);
    
        $token = JWTAuth::fromUser($user);
    
        return response()->json(['user' => $user, 'token' => $token]);
    }
    

    /**
     * Login User
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
        if (!$token = JWTAuth::attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    
        return $this->respondWithToken($token);
    }
    
    /**
     * Get user details
     */
    public function me()
{
    return response()->json(Auth::user());
}

    /**
     * Logout user
     */
    public function logout()
    {
        Auth::logout();
        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh JWT token
     */
    public function refresh(Request $request)
    {
        $refreshToken = $request->bearerToken(); // Get the refresh token from header
        
        if (!$refreshToken) {
            return response()->json(['error' => 'Refresh token is required'], 400);
        }
    
        try {
            // Refresh the JWT token using the provided refresh token
            $newAccessToken = JWTAuth::refresh(JWTAuth::getToken());
            return response()->json(['access_token' => $newAccessToken]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Invalid refresh token'], 401);
        }
    }
    

    /**
     * Format token response
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
           'expires_in' => JWTAuth::factory()->getTTL() * 60

        ]);
    }
   

}
