<?php

namespace App\Models\Payments;

use App\Models\Users\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payin extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'description',
        'sender_user_id',
        'sender_account_no',
        'sender_country',
        'gateway_id',      // Payment gateway used for the payout
        'acknowledged_by_id',  // The admin that approved the payment
        'status',
        'acknowledged_at',     // The time the payout was approved
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
        return $this->belongsTo(User::class, 'sender_user_id');
    }

    /*
     * The admin that approved the payout
     */
    public function acknowledgedBy()
    {
        return $this->belongsTo(User::class, 'acknowledged_by_id');
    }
}
