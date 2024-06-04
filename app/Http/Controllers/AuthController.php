<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use App\Mail\EmailVerification;

class AuthController extends Controller
{
    public function loginPage() {
        return view('login');
    }

    public function registerPage() {
        return view('register');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('/')->with('status', 'Login successful');
        }

        return redirect('/login')->with('error', 'Error login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return response()->json(['message' => 'Logged out successfully']);
    }

    public function register(RegisterRequest $request)
    {
        $user = User::create([
            'name' => '',
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $url = URL::temporarySignedRoute(
            'verification.verify',
            now()->addMinutes(60),
            ['id' => $user->getKey(), 'hash' => sha1($user->getEmailForVerification())]
        );
        dd($url);
        Mail::to($user->email)->send(new EmailVerification($url));

        return redirect('/')->with('status', 'Registration successful. Please check your email to verify your account.');
    }
    public function verify(EmailVerificationRequest $request)
    {
        $request->fulfill();
        dd($request);
    }
}
