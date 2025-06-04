<?php

use Illuminate\Auth\Events\Lockout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Volt\Component;

new #[Layout('components.layouts.auth')] #[Title('Login')] class extends Component {
    #[Validate('required|string|email')]
    public string $email = '';

    #[Validate('required|string')]
    public string $password = '';

    public bool $remember = false;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->ensureIsNotRateLimited();
        \DB::transaction(function () {
            if (!Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
                RateLimiter::hit($this->throttleKey());

                throw ValidationException::withMessages([
                    'email' => __('auth.failed'),
                ]);
            }

            RateLimiter::clear($this->throttleKey());
            Session::regenerate();

            // $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
            redirect()->to(route('dashboard', absolute: false));
        });
    }

    /**
     * Ensure the authentication request is not rate limited.
     */
    protected function ensureIsNotRateLimited(): void
    {
        if (!RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout(request()));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'email' => __('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the authentication rate limiting throttle key.
     */
    protected function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->email) . '|' . request()->ip());
    }
}; ?>

{{-- <div class="flex flex-col gap-6">
    <x-auth-header :title="__('Log in to your account')"
        :description="__('Enter your email and password below to log in')" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="login" class="flex flex-col gap-6">
        <!-- Email Address -->
        <flux:input wire:model="email" :label="__('Email address')" type="email" required autofocus autocomplete="email"
            placeholder="email@example.com" />

        <!-- Password -->
        <div class="relative">
            <flux:input wire:model="password" :label="__('Password')" type="password" required
                autocomplete="current-password" :placeholder="__('Password')" viewable />

            @if (Route::has('password.request'))
            <flux:link class="absolute end-0 top-0 text-sm" :href="route('password.request')" wire:navigate>
                {{ __('Forgot your password?') }}
            </flux:link>
            @endif
        </div>

        <!-- Remember Me -->
        <flux:checkbox wire:model="remember" :label="__('Remember me')" />

        <div class="flex items-center justify-end">
            <flux:button variant="primary" type="submit" class="w-full">{{ __('Log in') }}</flux:button>
        </div>
    </form>

    @if (Route::has('register'))
    <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-600 dark:text-zinc-400">
        {{ __('Don\'t have an account?') }}
        <flux:link :href="route('register')" wire:navigate>{{ __('Sign up') }}</flux:link>
    </div>
    @endif
</div> --}}

<!-- Page -->
<div class="page main-signin-wrapper">
    <!-- Row -->
    <div class="row signpages text-center">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="row row-sm">
                    <div class="col-lg-12 col-xl-12 col-xs-12 col-sm-12 login_form rounded-start-11">
                        <div class="container-fluid">
                            <div class="row row-sm ">
                                <div class="col-md-12 col-lg-12 px-lg-12 px-xl-12 d-flex flex-column py-6">

                                    <div class="text-center mt-4">
                                        {{-- <a href="index.html">
                                            <img src="storage/app/public/photos/Lqy4zp2AVCH0alVhtJWNJIUh0rW6AKGXt75KoDGO.png"
                                                style="height: 60px" class="text-center" />
                                        </a> --}}

                                    </div>
                                    <div class="card-body mt-2 mb-2">
                                        <h2 class="text-start mb-2">Sign In</h2>
                                        <p class="mb-4 text-muted tx-13 ms-0 text-start">Sign in to start trading
                                            crypto, forex and stocks.</p>
                                        <x-auth-session-status class="text-center" :status="session('status')" />


                                        <form wire:submit.prevent="login">
                                            <div class="form-group text-start">
                                                <div class="row">
                                                    {{-- --}}
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="tx-medium">
                                                                Email
                                                            </label>
                                                            <input class="form-control" placeholder="Enter your Email"
                                                                name="email" wire:model="email" type="text">
                                                            <x-form-status name="email" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    {{-- --}}
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="tx-medium">Password</label>
                                                            <input class="form-control"
                                                                placeholder="Enter Preferred Password" type="text"
                                                                name="password" wire:model="password">
                                                            <x-form-status name="password" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- --}}
                                            <button wire:loading.attr="disabled" type="submit" name="submit"
                                                class="btn btn-primary btn-block">Sign<span wire:loading>ing</span>
                                                In<span wire:loading>...</span></button>
                                        </form>

                                        <div class="text-start mt-4 ms-0 mb-3">
                                            {{-- <div class="mb-1"><a href="{{ route('password.request') }}">Forgot
                                                    password?</a></div> --}}
                                            <div>Don't have an account? <a href="{{ route('register') }}">Register
                                                    Here</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->
</div>
<!-- End Page -->