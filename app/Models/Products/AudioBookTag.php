<?php

namespace App\Models\Products;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AudioBookTag extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates = ['deleted_at'];
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
