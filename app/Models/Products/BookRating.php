<?php

namespace App\Models\Products;

use App\Models\Users\BuyerDetail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookRating extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'buyer_id',
        'book_id',
        'rating', //Between 1 and 5
    ];

    /*
     *  The relational methods
     *  The book that's rated
     */
    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id');
    }

    /*
     * The buyer that rated this book
     */
    public function buyer()
    {
        return $this->belongsTo(BuyerDetail::class, 'buyer_id');
    }
}
