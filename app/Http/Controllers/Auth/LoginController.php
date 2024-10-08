<?php

namespace App\Http\Controllers\Auth;

use Illuminate\View\View;
use App\Services\LoginService;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Auth\LoginRequest;

class LoginController extends Controller
{
    /**
     * Display the login view.
     */
    public function form(): View
    {
        return view('auth.login');
    }
    public function submit(LoginRequest $request, LoginService $loginService): RedirectResponse
    {
        $loginService->authenticate($request);

        $request->session()->regenerate();

        return redirect()->intended('/');
    }
}
