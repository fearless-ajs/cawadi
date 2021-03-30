<?php

namespace App\Transformers;

use App\Models\Transactions\Checkout;
use League\Fractal\TransformerAbstract;

class CheckoutTransformer extends TransformerAbstract
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
     * @param Checkout $checkout
     * @return array
     */
    public function transform(Checkout $checkout)
    {
        return [
            'identify'  => $checkout->id,
            'book'      => $checkout->book_id,
            'type'      => $checkout->book_type,
            'user'      => $checkout->user_id,
            'volume'    => $checkout->volume,
            'status'    => $checkout->status,
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'identify'  => 'id',
            'book'      => 'book_id',
            'type'      => 'book_type',
            'user'      => 'user_id',
            'volume'    => 'volume',
            'status'    => 'status'
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }

    public static function transformedAttribute($index)
    {
        $attributes = [
            'id'          =>  'identify',
            'book_id'     =>  'book'    ,
            'book_type'   =>  'type'    ,
            'user_id'     =>  'user'    ,
            'volume'      =>  'volume'  ,
            'status'      =>  'status'
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
