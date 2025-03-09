<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    /**
     * Show the forgot password form.
     *
     * @return \Illuminate\View\View
     */
    public function showForgotPasswordForm()
    {
        return view('auth.forgot-password');
    }

    /**
     * Handle sending a reset password link to the user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function sendResetLink(Request $request)
    {
        
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

       
        $status = Password::sendResetLink($request->only('email'));

        
        return $status === Password::RESET_LINK_SENT
            ? back()->with('success', 'Reset link sent to your email!')
            : back()->withErrors(['email' => 'Failed to send reset link.']);
    }
}
