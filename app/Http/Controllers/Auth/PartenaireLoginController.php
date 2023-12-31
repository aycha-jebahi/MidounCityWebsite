<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PartenaireLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:partenaire')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.partenaire-login');
    }

    public function login(Request $request)
    {
        // Validate form data
        $this->validate($request,
            [
                'email' => 'required|string|email',
                'password' => 'required|string|min:8'
            ]
        );

        // Attempt to login as admin
        if (Auth::guard('partenaire')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // If successful then redirect to intended route or admin dashboard
            return redirect()->intended(route('partenaire.dashboard'));
        }

        // If unsuccessful then redirect back to login page with email and remember fields
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    /*public function logout(Request $request)
    {
        Auth::guard('partenaire')->logout();
        return redirect('welcome');
    }*/
}
