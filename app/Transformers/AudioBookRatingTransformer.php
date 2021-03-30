<?php

namespace App\Transformers;

use App\Models\Products\AudioBook;
use App\Models\Products\AudioBookRating;
use App\Models\Users\BuyerDetail;
use League\Fractal\TransformerAbstract;

class AudioBookRatingTransformer extends TransformerAbstract
{
    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected $defaultIncludes = [
        //
    ];

    /**
     * List of resources possible to include
     *
     * @var array
     */
    protected $availableIncludes = [
        //
    ];

    /**
     * A Fractal transformer.
     *
     * @param AudioBookRating $rating
     * @return array
     */
    public function transform(AudioBookRating $rating)
    {
        return [
            'identity'  => $rating->id,
            'buyer'     => $rating->buyer_id,
            'book'      => $rating->book_id,
            'score'     => $rating->rating, //Between 1 and 5
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'identify'  => 'id',
            'buyer'     => 'buyer_id',
            'book'      => 'book_id',
            'score'     => 'rating'
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }

    public static function transformedAttribute($index)
    {
       $attributes = [
           'id'         => 'identify',
           'buyer_id'   => 'buyer'   ,
           'book_id'    => 'book'    ,
           'rating'     => 'score'   ,
       ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
