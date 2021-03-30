<?php

namespace App\Transformers;

use App\Models\Payments\Gateway;
use League\Fractal\TransformerAbstract;

class GatewayTransformer extends TransformerAbstract
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
     * @param Gateway $gateway
     * @return array
     */
    public function transform(Gateway $gateway)
    {
        return [
            'identify'      => $gateway->id,
            'gateway_name'  => $gateway->name,
            'gateway_link'  => $gateway->link,
            'secret'        => $gateway->secret,
            'secret_key'    => $gateway->secret_key,
            'status'        => $gateway->status,    //Disabled and Active
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'identify'      => 'id'        ,
            'gateway_name'  => 'name'      ,
            'gateway_link'  => 'link'      ,
            'secret'        => 'secret'    ,
            'secret_key'    => 'secret_key',
            'status'        => 'status'    ,    //Disabled and Active
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }

    public static function transformedAttribute($index)
    {
        $attributes = [
           'id'          => 'identify'     ,
           'name'        => 'gateway_name' ,
           'link'        => 'gateway_link' ,
           'secret'      => 'secret'       ,
           'secret_key'  => 'secret_key'   ,
           'status'      => 'status'       ,    //Disabled and Active

        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
