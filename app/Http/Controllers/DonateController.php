<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;
use Midtrans\Snap;

class DonateController extends Controller
{
    public function form()
    {
        $donations = Donation::latest()->take(5)->get();
        return view('donate', compact('donations'));
    }

    public function checkout(Request $request)
    {
        $donation = Donation::create([
            'order_id' => 'DONATE-' . time(),
            'name' => $request->name,
            'email' => $request->email,
            'amount' => $request->amount,
            'message' => $request->message,
        ]);

        $params = [
            'transaction_details' => [
                'order_id' => $donation->order_id,
                'gross_amount' => $donation->amount,
            ],
            'customer_details' => [
                'first_name' => $donation->name,
                'email' => $donation->email,
            ],
            'callbacks' => [
                'finish' => url('/donation/thanks'),
            ],
        ];

        $snapToken = Snap::getSnapToken($params);

        return view('donate-pay', compact('snapToken', 'donation'));
    }

    public function thanks()
    {
        return view('thanks');
    }
}
