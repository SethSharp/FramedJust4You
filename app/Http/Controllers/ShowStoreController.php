<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Stripe\StripeClient;

class ShowStoreController extends Controller
{
    public function __invoke()
    {
        $stripe = new StripeClient(env('STRIPE_SECRET'));
        $items = $stripe->products->all(['limit' => 3]);

        foreach ($items->data as $item) {
            $item['price'] = $stripe->prices->retrieve(
                    $item->default_price,
                    []
                )->unit_amount / 100;
        }

        return Inertia::render('Store', [
            'items' => $items
        ]);
    }
}
