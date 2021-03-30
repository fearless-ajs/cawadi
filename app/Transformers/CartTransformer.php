<?php

namespace App\Transformers;

use App\Models\Transactions\Cart;
use League\Fractal\TransformerAbstract;

class CartTransformer extends TransformerAbstract
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
     * @param Cart $cart
     * @return array
     */
    public function transform(Cart $cart)
    {
        return [
            'identify'  => $cart->id,
            'book'      => $cart->book_id,
            'type'      => $cart->book_type,
            'user'      => $cart->user_id,
            'volume'    => $cart->volume,
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
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
