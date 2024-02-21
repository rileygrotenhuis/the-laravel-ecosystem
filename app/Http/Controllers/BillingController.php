<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Laravel\Cashier\Checkout;

class BillingController extends Controller
{
    public function checkout(): Checkout
    {
        return Checkout::guest()->create(
            [config('services.stripe.price_id')],
            [
                'success_url' => route('dashboard'),
                'cancel_url' => route('dashboard'),
            ]
        );
    }

    public function billing(Request $request): RedirectResponse
    {
        $user = $request->user();

        return $user->redirectToBillingPortal(route('dashboard'));
    }
}
