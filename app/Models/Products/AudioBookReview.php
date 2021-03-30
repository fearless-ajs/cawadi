<?php

namespace App\Models\Products;

use App\Models\Users\BuyerDetail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AudioBookReview extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'buyer_id',
        'book_id',
        'reviewed', //Between 1 and 5
    ];

    /*
     *  The relational methods
     *  The book that's reviewed
     */
    public function book()
    {
        return $this->belongsTo(AudioBook::class, 'book_id');
    }

    /*
     * The buyer that reviewed this book
     */
    public function buyer()
    {
        return $this->belongsTo(BuyerDetail::class, 'buyer_id');
    }

}
