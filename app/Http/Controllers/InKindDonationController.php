<?php

namespace App\Http\Controllers;

use Redirect;
use App\Models\InKindDonation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class InKindDonationController extends Controller
{
    public function create()
    {
        return view('pages.donation');
    }

    public function store(Request $request)
    {
        $user_id = Auth::id();

        $donation = new InKindDonation();
        $donation->user_id = $user_id;
        $donation->DescriptionDonation = $request->DescriptionDonation;

        // Handle image upload
        if ($request->hasFile('ProofOfDonationInKind')) {
            $image = $request->file('ProofOfDonationInKind');
            $imageName = time() . '_' . $image->getClientOriginalName();
            // Store the image in the public directory
            $image->move(public_path('assets/img'), $imageName); // Save the image to public/assets/img directory
        }

        if (isset($imageName)) {
            $donation->ProofOfDonationInKind = $imageName; // Assign the image name to user_image field
        }
        $donation->save();
        return Redirect::route('donation');
    }

    public function indexs()
    {
        $donationsInKind = InKindDonation::all();
        return view('pages.financialreport2', compact('donationsInKind'));
    }
}
