<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BuyerDetail extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates = ['deleted_at'];


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
        'zipcode',          //Optional
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
