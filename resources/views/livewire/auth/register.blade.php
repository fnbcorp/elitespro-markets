<?php

use App\Models\User;
use App\Models\AccountProfile;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Volt\Component;


new #[Layout('components.layouts.auth')] #[Title('Register')] class extends Component {
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';
    public string $username = '';
    // public string $country = '';
    public string $phone = '';
    public string $gender = '';
    // public string $account_type = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
            // 'country' => ['required', 'string', 'max:255'],
            'username' => [
                'required',
                'string',
                'max:255',
                'unique:' . AccountProfile::class
            ],
            'phone' => ['required', 'string', 'max:13'],
            // 'account_type' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:10'],
        ]);
        $validated['password'] = Hash::make($validated['password']);
        // dd($validated);
        // echo $validated;

        \DB::transaction(function () use ($validated) {
            event(new Registered(($user = User::create($validated))));

            // Auth::login($user);

            $account_profile = AccountProfile::create([
                'user_id' => $user->id,
                'username' => $validated['username'],
                'country' => '',
                // 'country' => $validated['country'],
                'phone' => $validated['phone'],
                'gender' => $validated['gender'],
            ]);

            $account_profile->accountBalance()->create([
                'currency' => '$',
            ]);
            session()->flash('status', 'Registration successful! Please log in.');
            $this->redirectIntended(route('login', absolute: false), navigate: true);
        });
    }
}; ?>

{{-- <div class="flex flex-col gap-6">
    <x-auth-header :title="__('Create an account')"
        :description="__('Enter your details below to create your account')" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="register" class="flex flex-col gap-6">
        <!-- Name -->
        <flux:input wire:model="name" :label="__('Name')" type="text" required autofocus autocomplete="name"
            :placeholder="__('Full name')" />

        <!-- Email Address -->
        <flux:input wire:model="email" :label="__('Email address')" type="email" required autocomplete="email"
            placeholder="email@example.com" />

        <!-- Password -->
        <flux:input wire:model="password" :label="__('Password')" type="password" required autocomplete="new-password"
            :placeholder="__('Password')" viewable />

        <!-- Confirm Password -->
        <flux:input wire:model="password_confirmation" :label="__('Confirm password')" type="password" required
            autocomplete="new-password" :placeholder="__('Confirm password')" viewable />

        <div class="flex items-center justify-end">
            <flux:button type="submit" variant="primary" class="w-full">
                {{ __('Create account') }}
            </flux:button>
        </div>
    </form>

    <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-600 dark:text-zinc-400">
        {{ __('Already have an account?') }}
        <flux:link :href="route('login')" wire:navigate>{{ __('Log in') }}</flux:link>
    </div>
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
                                    {{-- --}}
                                    <div class="text-center mt-4">
                                        {{-- <a href="index.html">
                                            <img src="storage/app/public/photos/Lqy4zp2AVCH0alVhtJWNJIUh0rW6AKGXt75KoDGO.png"
                                                style="height: 60px" class="text-center" />
                                        </a> --}}

                                    </div>
                                    {{-- --}}
                                    <div class="card-body mt-2 mb-2">
                                        <h2 class="text-start mb-2">Sign Up for Free</h2>
                                        <p class="mb-3 text-muted tx-13 ms-0 text-start">It's Free to Sign up and only
                                            takes a minute.</p>
                                        <x-auth-session-status class="text-center" :status="session('status')" />

                                        {{-- --}}

                                        <form wire:submit="register">
                                            <div class="form-group text-start">
                                                <div class="row">
                                                    {{-- --}}
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="tx-medium">
                                                                Full Name
                                                            </label>
                                                            <input class="form-control" placeholder="Enter your Name"
                                                                name="name" wire:model="name" type="text">
                                                            <x-form-status name="name" />
                                                        </div>
                                                    </div>
                                                    {{-- --}}
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="tx-medium">Username</label>
                                                            <input class="form-control"
                                                                placeholder="Enter Preferred Username" type="text"
                                                                name="username" wire:model="username">
                                                            <x-form-status name="username" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- --}}
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
                                                    {{-- --}}
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="tx-medium">Phone</label>
                                                            <input class="form-control" placeholder="Enter Phone"
                                                                name="phone" type="text" wire:model="phone">
                                                            <x-form-status name="phone" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- --}}
                                            <div class="form-group text-start">
                                                <div class="row">
                                                    {{-- --}}
                                                    <div class="col-lg-16">
                                                        <div class="mb-3">
                                                            <label class="tx-medium">
                                                                Gender
                                                            </label>
                                                            <select class="form-control select2-no-search gender-select"
                                                                wire:model="gender">
                                                                <option></option>
                                                                <option value="Male">
                                                                    Male
                                                                </option>
                                                                <option value="Female">
                                                                    Female
                                                                </option>
                                                            </select>
                                                            <x-form-status name="gender" />
                                                        </div>
                                                    </div>
                                                    {{-- --}}
                                                    {{-- <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="tx-medium">
                                                                Country
                                                            </label>
                                                            <select
                                                                class="form-control select2-no-search country-select"
                                                                wire:model="country">
                                                                <option></option>
                                                                <option value="Ack">
                                                                    A
                                                                </option>
                                                                <option value="B">
                                                                    Back
                                                                </option>
                                                            </select>
                                                            <x-form-status name="country" />
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            </div>
                                            {{-- --}}
                                            <div class="form-group text-start">
                                                <div class="row">
                                                    {{-- --}}
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="tx-medium">
                                                                Password
                                                            </label>
                                                            <input class="form-control border-end-0"
                                                                placeholder="Enter your Password" name="password"
                                                                wire:model="password" type="" {{--
                                                                data-bs-toggle="password" --}}>
                                                            <x-form-status name="password" />
                                                        </div>
                                                    </div>
                                                    {{-- --}}
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="tx-medium">
                                                                Confirm Password
                                                            </label>
                                                            <input class="form-control border-end-0"
                                                                placeholder="Confirm Password"
                                                                wire:model="password_confirmation" type="text" {{--
                                                                data-bs-toggle="password" --}}>
                                                            <x-form-status name="password_confirmation" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- --}}
                                            <button wire:loading.attr="disabled" type="submit" name="submit"
                                                class="btn btn-primary btn-block">Register<span
                                                    wire:loading>ing...</span>
                                            </button>
                                        </form>

                                        <div class="text-start mt-4 ms-0 mb-3">
                                            <p class="mb-0">
                                                Already have an account?
                                                <a href="{{ route('login') }}">Sign In</a>
                                            </p>
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