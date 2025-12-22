<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Livewire\Settings\TwoFactor;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('profile.edit');
    Route::get('settings/password', Password::class)->name('user-password.edit');
    Route::get('settings/appearance', Appearance::class)->name('appearance.edit');

    Route::get('settings/two-factor', TwoFactor::class)
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                    && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('two-factor.show');
});

if (config('services.github.client_id') && config('services.github.client_secret')) {
    Route::get('/auth/github/redirect', function () {
        return Socialite::driver('github')
            ->scopes([
                'read:user',
                'user:email',
            ])
            ->redirect();
    })->name('auth.github.redirect');

    Route::get('/auth/github/callback', function () {
        $user = Socialite::driver('github')->user();
        $user = User::updateOrCreate(
            [
                'email' => strtolower($user->email),
            ],
            [
                'name' => $user->name,
            ],
        );
        Auth::login($user);

        return redirect()->route('dashboard');
    })->name('auth.github.callback');
}
