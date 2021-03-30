<?php

namespace App\Transformers;

use App\Models\Transactions\WishList;
use League\Fractal\TransformerAbstract;

class WishListTransformer extends TransformerAbstract
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
     * @param WishList $wishlist
     * @return array
     */
    public function transform(WishList $wishlist)
    {
        return [
            'identify'  => $wishlist->id,
            'book'      => $wishlist->book_id,
            'type'      => $wishlist->book_type,
            'user'      => $wishlist->user_id,
            'volume'    => $wishlist->volume,
            'status'    => $wishlist->status,
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
