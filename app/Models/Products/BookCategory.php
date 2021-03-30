<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookCategory extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
          'name',
          'description'
    ];

    /*
     * Relational methods
     * The textual books that falls under this category
     */
    public function TextualBooks()
    {
        return $this->hasMany(Book::class, 'name');
    }

    /*
     * The audio books that falls under this category
     */
    public function AudioBooks()
    {
        return $this->hasMany(AudioBook::class, 'name');
    }
}
