<?php

namespace App\Transformers;

use App\Models\Products\BookCategory;
use League\Fractal\TransformerAbstract;

class BookCategoryTransformer extends TransformerAbstract
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
     * @param BookCategory $category
     * @return array
     */
    public function transform(BookCategory $category)
    {
        return [
            'identity'      => $category->id,
            'name'          => $category->name,
            'description'   => $category->description
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'identity'      => 'id',
            'name'          => 'name',
            'description'   => 'description'
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }

    public static function transformedAttribute($index)
    {
        $attributes = [
            'id'             => 'identify',
            'name'           => 'name'   ,
            'description'    => 'description'    ,
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
