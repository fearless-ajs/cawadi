<?php

namespace App\Models\Products;

use App\Models\Users\PublisherDetail;
use App\Models\Users\User;
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
        'stock',               // Number of the book in stock or available
        'code',                // Product code
        'front_cover',         // Front Cover picture to be displayed
        'back_cover',          // Back Cover picture to be displayed
        'side_cover',          // Side Cover picture to be displayed --> Optional
        'publisher_id',        // Id of the publisher
        'author',              // Name of the author
        'audio_status',        // True or false i.e if audio version is available
        'audio_version_id',    // if the audio version is available
        'approved_by_id',      // The admin that approved the book
        'approved_at',         // The time and date the book is approved
        'status',              // Active, suspended or terminated (Sale status)
    ];

    /*
     * Mutators
     */
    public function setSlugAttribute($slug)
    {
        $this->attributes['slug'] = Str::slug($slug).'_By_'.$this->author.Carbon::now()->timestamp.'_'.Str::random(30);
    }

    /*
     * Generating a random character with current timestamp
     *  and author's name
     */
    public function setCodeAttribute($code)
    {
        $this->attributes['code'] = Str::random(10).$this->author.Carbon::now()->timestamp;
    }

    /*
     *  The relational methods
     *  The publisher of the book
     */
    public function publisher()
    {
        return $this->belongsTo(PublisherDetail::class, 'publisher_id');
    }

    /*
     * The audio version of the book
     */
    public function audioVersion()
    {
        return $this->belongsTo(Book::class, 'audio_version_id');
    }

    /*
     * The tags that is related to this book
     */
    public function tags()
    {
        return $this->belongsToMany(BookTag::class, 'book_tags', 'book_id');
    }

    /*
     * The administrator that approved the book
     */
    public function approvedBy()
    {
        return $this->belongsTo(User::class, 'approved_by_id');
    }

}
