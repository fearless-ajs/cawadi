<?php

namespace App\Transformers;

use App\Models\Products\AudioBook;
use League\Fractal\TransformerAbstract;

class AudioBookTransformer extends TransformerAbstract
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
     * @param AudioBook $book
     * @return array
     */
    public function transform(AudioBook $book)
    {
        return [
            'identity'              => $book->id,
            'topic'                 => $book->title,
            'slug'                  => $book->slug,
            'category'              => $book->category,
            'amount'                => $book->price,
            'overview'              => $book->abstract,
            'forward'               => $book->description,
            'volume'                => $book->stock,
            'product_id'            => $book->code,
            'front_cover_image'     => $book->front_cover,
            'back_cover_image'      => $book->back_cover,
            'side_cover_image'      => $book->side_cover,
            'publisher'             => $book->publisher_id,
            'author_name'           => $book->author,
            'text_version'          => $book->text_status,
            'text_version_id'       => $book->text_version_id,
            'approved_by'           => $book->approved_by_id,
            'approval_time'         => $book->approved_time,
            'status'                => $book->status,
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'identity'              => 'id',
            'topic'                 => 'title',
            'slug'                  => 'slug',
            'category'              => 'category',
            'amount'                => 'price',
            'overview'              => 'abstract',
            'forward'               => 'description',
            'volume'                => 'stock',
            'product_id'            => 'code',
            'front_cover_image'     => 'front_cover',
            'back_cover_image'      => 'back_cover',
            'side_cover_image'      => 'side_cover',
            'publisher'             => 'publisher_id',
            'author_name'           => 'author',
            'text_version'          => 'text_status',
            'text_version_id'       => 'text_version_id',
            'approved_by'           => 'approved_by_id',
            'approval_time'         => 'approved_time',
            'status'                => 'status',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }

    public static function transformedAttribute($index)
    {
        $attributes = [
           'id'                =>   'identity'           ,
           'title'             =>   'topic'              ,
           'slug'              =>   'slug'               ,
           'category'          =>   'category'           ,
           'price'             =>   'amount'             ,
           'abstract'          =>   'overview'           ,
           'description'       =>   'forward'            ,
           'stock'             =>   'volume'             ,
           'code'              =>   'product_id'         ,
           'front_cover'       =>   'front_cover_image'  ,
           'back_cover'        =>   'back_cover_image'   ,
           'side_cover'        =>   'side_cover_image'   ,
           'publisher_id'      =>   'publisher'          ,
           'author'            =>   'author_name'        ,
           'text_status'       =>   'text_version'       ,
           'text_version_id'   =>   'text_version_id'    ,
           'approved_by_id'    =>   'approved_by'        ,
           'approved_time'     =>   'approval_time'      ,
           'status'            =>   'status'             ,
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
