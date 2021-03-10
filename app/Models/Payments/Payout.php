<?php

namespace App\Models\Payments;

use App\Models\Users\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payout extends Model
{
    use HasFactory;
    protected $fillable = [
      'description',
      'destination_user_id',
      'destination_account_no',
      'country_country',
      'gateway_id',      // Payment gateway used for the payout
      'approved_by_id',  // The admin that approved the payment
      'approved_at',     // The time the payout was approved
    ];

    /*
     * Relation methods
     * Payment gateway used for the payout
     */
    public function gateway()
    {
        return $this->belongsTo(Gateway::class, 'gateway_id');
    }

    /*
     * The user that is being paid
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'destination_user_id');
    }

    /*
     * The admin that approved the payout
     */
    public function approvedBy()
    {
        return $this->belongsTo(User::class, 'approved_by_id');
    }

}
