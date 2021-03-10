<?php

namespace App\Models\Products;

use App\Models\Users\PublisherDetail;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'type',         //Premium or free
        'slug',         //title_author_timestamp_30_random_characters (Must be unique)
        'category',
        'price',
        'abstract',
        'description',
        'stock',        // Number of the book in stock or available
        'code',         // Product code
        'front_cover',  // Front Cover pictures to be displayed
        'back_cover',   // Cover pictures to be displayed
        'side_cover',   // Optional
        'publisher',    // Id of the publisher
        'author',
        'audio_status',  // True or false i.e if audio version is available
        'status',        // Active, suspended or terminated (Sale status)
    ];

    /*
     * Mutators
     */
    public function setSlugAttribute($slug)
    {
        $this->attributes['slug'] = Str::slug($slug).'_By_'.$this->author.Carbon::now()->timestamp.'_'.Str::random(30);
    }

    /*
     *  The relational methods
     *  The publisher of the book
     */
    public function publisher()
    {
        return $this->belongsTo(PublisherDetail::class);
    }

}
