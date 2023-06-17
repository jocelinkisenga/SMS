<?php

namespace App\Domain\User\Http\Controllers\Auth;

use App\Domain\User\Actions\LoginAction;
use App\Domain\User\Http\Requests\Auth\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function create()
    {
        return view("auth.login");
    }

    public function store(LoginRequest $loginRequest, LoginAction $loginAction)
    {
        

    }
}
