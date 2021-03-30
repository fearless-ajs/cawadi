<?php

namespace App\Transformers;

use App\Models\Users\ReaderDetail;
use League\Fractal\TransformerAbstract;

class ReaderDetailTransformer extends TransformerAbstract
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
     * @param ReaderDetail $detail
     * @return array
     */
    public function transform(ReaderDetail $detail)
    {
        return [
            'identity'        => $detail->id,
            'user'            => $detail->user_id,
            'first_name'      => $detail->first_name,
            'other_name'      => $detail->middle_name,
            'surname'         => $detail->last_name,
            'age'             => $detail->age,
            'phone_number'    => $detail->phone,
            'gender'          => $detail->gender,
            'address'         => $detail->address,
            'city'            => $detail->city,
            'state'           => $detail->state,
            'nationality'     => $detail->country,
            'zipcode'         => $detail->zipcode,
            'language'        => $detail->language,
            'bio'             => $detail->biography,
            'interest'        => $detail->interest,
            'qualification'   => $detail->qualification,
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'identity'        => 'id',
            'user'            => 'user_id',
            'first_name'      => 'first_name',
            'other_name'      => 'middle_name',
            'surname'         => 'last_name',
            'age'             => 'age',
            'phone_number'    => 'phone',
            'gender'          => 'gender',
            'address'         => 'address',
            'city'            => 'city',
            'state'           => 'state',
            'nationality'     => 'country',
            'zipcode'         => 'zipcode',
            'language'        => 'language',
            'bio'             => 'biography',
            'interest'        => 'interest',
            'qualification'   => 'qualification',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }

    public static function transformedAttribute($index)
    {
        $attributes = [
            'id'               =>  'identity'      ,
            'user_id'          =>  'user'          ,
            'first_name'       =>  'first_name'    ,
            'middle_name'      =>  'other_name'    ,
            'last_name'        =>  'surname'       ,
            'age'              =>  'age'           ,
            'phone'            =>  'phone_number'  ,
            'gender'           =>  'gender'        ,
            'address'          =>  'address'       ,
            'city'             =>  'city'          ,
            'state'            =>  'state'         ,
            'country'          =>  'nationality'   ,
            'zipcode'          =>  'zipcode'       ,
            'language'         =>  'language'      ,
            'biography'        =>  'bio'           ,
            'interest'         =>  'interest'      ,
            'qualification'    =>  'qualification' ,
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
