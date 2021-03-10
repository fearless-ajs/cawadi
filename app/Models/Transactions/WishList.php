<?php

namespace App\Models\Transactions;

use App\Models\Products\AudioBook;
use App\Models\Products\Book;
use App\Models\Users\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WishList extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_id',
        'book_type',
        'user_id',
        'volume',
    ];

    /*
     *  The relational methods
     *  The book that's reviewed
     */
    public function book()
    {
        if ($this->book_type == 'audio'){
            return $this->belongsTo(AudioBook::class, 'book_id');
        }
        return $this->belongsTo(Book::class, 'book_id');
    }

    /*
     * The user or customer that owns this cart
     */
    public function customer()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
