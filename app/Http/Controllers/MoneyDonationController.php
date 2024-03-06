<?php

namespace App\Http\Controllers;

use Redirect;
use App\Models\MoneyDonation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\User;

class MoneyDonationController extends Controller
{
    public function create()
    {
        return view('pages.donation');
    }
    public function stores(Request $request)
    {
        $user_id = Auth::id();

        $donation = new MoneyDonation();
        $donation->user_id = $user_id;
        $donation->CashAmount = $request->CashAmount;
        $donation->ModeOfDonation = $request->ModeOfDonation;
        $donation->ProofOfDonationCash = $request->ProofOfDonationCash;
        $donation->save();

        // Handle image upload
        if ($request->hasFile('ProofOfDonationCash')) {
            $image = $request->file('ProofOfDonationCash');
            $imageName = time() . '_' . $image->getClientOriginalName();
            // Store the image in the public directory
            $image->move(public_path('assets/img'), $imageName); // Save the image to public/assets/img directory
        }

        if (isset($imageName)) {
            $donation->ProofOfDonationCash = $imageName; // Assign the image name to user_image field
        }
        $donation->save();
        return Redirect::route('donation');
    }

    public function index()
    {
        $donations = MoneyDonation::all();
        return view('pages.financialreport', compact('donations'));
    }
}
