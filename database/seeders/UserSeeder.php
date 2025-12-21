<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public const string USER_EMAIL = 'altrompy@konnector.dev';

    public const string USER_PASSWORD = 'Altrompy@123';

    public function run(): void
    {
        User::query()->updateOrCreate(
            ['email' => self::USER_EMAIL],
            [
                'name' => 'Altrompy',
                'password' => Hash::make(self::USER_PASSWORD),
                'email_verified_at' => now(),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'two_factor_confirmed_at' => null,
            ]
        );
    }
}
