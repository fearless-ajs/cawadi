<?php

namespace App\Models\Products;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AudioBookTag extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'book_id'
    ];

    /*
     *  The relational methods
     *  The book that's tagged
     */
    public function books()
    {
        return $this->belongsTo(AudioBook::class, 'book_id');
    }

}
