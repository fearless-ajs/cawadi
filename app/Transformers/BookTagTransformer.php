<?php

namespace App\Transformers;

use App\Models\Products\BookTag;
use League\Fractal\TransformerAbstract;

class BookTagTransformer extends TransformerAbstract
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
     * @param BookTag $tag
     * @return array
     */
    public function transform(BookTag $tag)
    {
        return [
            'identity'  => $tag->id,
            'title'     => $tag->name,
            'book'      => $tag->book_id,
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'identify'  => 'id',
            'title'     => 'name',
            'book'      => 'book_id',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }

    public static function transformedAttribute($index)
    {
        $attributes = [
            'id'         => 'identify',
            'name'       => 'title'   ,
            'book_id'    => 'book'    ,
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
