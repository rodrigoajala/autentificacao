<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateRequest;
use App\Http\Requests\LoginRequest;

use App\Services\SignupService;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;


class AuthenticationController extends Controller
{
    public function __construct(
        private readonly SignupService $signupService,

    ) {
    }

    public function logout(): RedirectResponse
    {
        Auth::logout();
        return redirect()->route('home');
    }

    public function login()
    {
        return view('login');
    }

    public function makeLogin(LoginRequest $request)
    {
        $data = $request->validate(
            [
                'email' => ['required', 'email'],
                'password' => ['required']
            ],
            [
                'email' => 'E-mail é obrigatorio',
                'password' => 'Senha é obrigatorio'
            ]
        );

        if (Auth::attempt($data)) {
            return redirect()->route('listarProjetosDeRota');
        }

        return redirect()->back()->with('danger', 'E-mail ou senha invalido');
    }


    public function signup()
    {
        return view('create');
    }

    public function makeSignup(CreateRequest $request)
    {
        $data = $request->all();
        $user = $this->signupService->create($data);

        return redirect()->route('home');

    }
}
