<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Laravel\Socialite\Facades\Socialite;

class GithubAuthController extends Controller
{
    public function login(): RedirectResponse
    {
        return Socialite::driver('github')->redirect();
    }

    public function callback(): RedirectResponse
    {
        $githubUser = Socialite::driver('github')->user();

        $user = User::firstOrCreate(
            ['email' => $githubUser->getEmail()],
            [
                'name' => $githubUser->getName(),
            ]
        );

        if (! $user->stripe_id) {
            $user->createAsStripeCustomer();
        }

        auth()->login($user);

        return to_route('dashboard');
    }
}
