<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class MoneyDonation extends Model
{
    use HasFactory;

    protected $table = 'moneydonations';
    protected $fillable = ['ProofOfDonationCash'];


    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
