<?php

namespace App\Livewire\Auth;

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Livewire\Component;

class Login extends Component
{
    public $email, $password, $remember;
    public function render()
    {
        return view('livewire.auth.login')->extends('layouts.app')->section('content');
    }
    public function rules()
    {
        return [
            'email' => ['required', 'email'],
            'password' => ['required']
        ];
    }
    public function loginUser()
    {
        $this->validate();
        $throttlekey = strtolower($this->email) . '|' . request()->ip();
        if (RateLimiter::tooManyAttempts($throttlekey, 5)) {
            $this->addError('email', __('auth.throttle', [
                'seconds' => RateLimiter::availableIn($throttlekey)
            ]));
        };
        if (!Auth::attempt($this->only(['email', 'password']), $this->remember)) {
            RateLimiter::hit($throttlekey);
            $this->addError('email', __('auth.failed'));
            return null;
        }
        return redirect()->to(RouteServiceProvider::HOME);
    }
}
