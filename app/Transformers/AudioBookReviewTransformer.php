<?php

namespace App\Transformers;

use App\Models\Products\AudioBookReview;
use League\Fractal\TransformerAbstract;

class AudioBookReviewTransformer extends TransformerAbstract
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
     * @param AudioBookReview $review
     * @return array
     */
    public function transform(AudioBookReview $review)
    {
        return [
            'identity'  => $review->id,
            'buyer'     => $review->buyer_id,
            'book'      => $review->book_id,
            'content'   => $review->review, //Between 1 and 5
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'identify'  => 'id',
            'buyer'     => 'buyer_id',
            'book'      => 'book_id',
            'content'   => 'review'
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }

    public static function transformedAttribute($index)
    {
        $attributes = [
            'id'         => 'identify',
            'buyer_id'   => 'buyer'   ,
            'book_id'    => 'book'    ,
            'review'     => 'content' ,
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
