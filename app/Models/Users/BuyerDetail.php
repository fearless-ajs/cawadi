<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyerDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'first_name',
        'middle_name',     //Optional
        'last_name',
        'age',
        'phone',
        'gender',
        'address',
        'city',
        'state',
        'country',
        'zip_code',          //Optional
        'language',          //English, French or others
        'biography',
        'interest',
        'qualification',     // The maximum qualification of the user(Optional)
    ];

    /*
     * Relational methods
     * The user that owns this details
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
