<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {

        return view('logins.login');
    }
/*************  ✨ Windsurf Command ⭐  *************/
    /**
     * Handle the login request.
     *
     * This method validates the user's email and password, checks if the user exists
     * in the database, and verifies the password. If successful, the user is logged in
     * and redirected to the dashboard. Otherwise, an error message is returned.
     *
     * @param Request $request The incoming request containing login credentials.
     * @return \Illuminate\Http\RedirectResponse
     */

/*******  d9242a9a-7e0d-4fbe-bc88-ef1c179a3cca  *******/    public function loginshow(Request $request)
{
    $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    $messages = [
        'email.required' => 'Email is required',
        'email.email' => 'Email is not valid',
        'password.required' => 'Password is required',
    ];

    $request->validate($rules, $messages);

    $user = Login::where('email', $request->email)->first();

    if (!$user || !Hash::check($request->password, $user->password)) {
        return back()->with('error', 'Invalid email or password');
    }

    Auth::login($user);

    return redirect()->route('dashboard.index')->with('success', 'Login successful!');
}



    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }



    public function emailverify(Request $request)
    {
        return view('logins.emailverify');
    }

    public function emailverifysend(Request $request)
{
    $rules = [
        'email' => 'required|email',
    ];

    $messages = [
        'email.required' => 'Email is required',
        'email.email' => 'Email is not valid',
    ];

    $request->validate($rules, $messages);

    if (Login::where('email', $request->email)->exists()) {
        $user = Login::where('email', $request->email)->first();

        $user->email_verified_at = now();
        $user->save();

        session(['reset_email' => $user->email]);

        return redirect('resetpassword')->with('success', 'Email verified successfully');
    } else {
        return back()->with('error', 'Email not found');
    }
}



    public function resetpassword(Request $request)
    {
        return view('logins.resetpassword');
    }

    public function resetpasswordsend(Request $request)
    {
        $request->validate([
            'password' => 'required|confirmed|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/',
        ]);

        $email = $request->input('email') ?? session('reset_email');

        $user = Login::where('email', $email)->first();


        if (!$user) {
            return back()->with('error', 'User not found!');
        }

        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->route('login')->with('success', 'Password reset successfully');
    }

    public function changepassword(Request $request)
{
    $request->validate([
        'password' => 'required|confirmed|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/',
    ]);

    $email = $request->input('email') ?? session('reset_email');
    $user = Login::where('email', $email)->first();

    if (!$user) {
        return back()->with('error', 'User not found!');
    }

    $user->password = bcrypt($request->password);
    $user->save();

    return redirect()->route('dashboard.index')->with('success', 'Password changed successfully');
}





}
