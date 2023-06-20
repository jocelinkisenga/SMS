<?php

namespace App\Domain\User\Http\Controllers\Auth;

use App\Domain\User\Http\Requests\Auth\LoginRequest;
use App\Domain\User\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create()
    {
        return view("auth.login");
    }

    public function store(LoginRequest $loginRequest)
    {

        $loginRequest->authenticate();
        $loginRequest->session()->regenerate();
        return redirect()->intended(\App\Providers\RouteServiceProvider::HOME);


    }

    public function destroy(Request $request)
    {

       Auth::guard('web')->logout();

       $request->session()->invalidate();

       $request->session()->regenerateToken();

       return redirect()->route('login');
    }
}
