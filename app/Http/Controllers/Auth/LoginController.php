<?php

namespace App\Http\Controllers\Auth;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Services\LoginService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;

class LoginController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }
    public function attemptLogin(LoginRequest $request, LoginService $loginService)
    {
        $loginService->authenticate($request);

        $request->session()->regenerate();

        return redirect()->intended('/');
    }
}
