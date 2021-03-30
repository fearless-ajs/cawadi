<?php

namespace App\Transformers;

use App\Models\Payments\Payout;
use League\Fractal\TransformerAbstract;

class PayoutTransformer extends TransformerAbstract
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
     * @param Payout $payout
     * @return array
     */
    public function transform(Payout $payout)
    {
        return [
            'identify'              => $payout->id,
            'detail'                =>  $payout->description,
            'destination_user'      => $payout->destination_user_id,
            'destination_account'   => $payout->destination_account_no,
            'destination_country'   => $payout->destination_country,
            'gateway'               => $payout->gateway_id ,      // Payment gateway used for the payout
            'approved_by'           => $payout->approved_by_id,  // The admin that approved the payment
            'status'                => $payout->status,
            'approved_at'           => $payout->approved_at,     // The time the payout was approved
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'identify'              => 'id'                     ,
            'detail'                => 'description'            ,
            'destination_user'      => 'destination_user_id'    ,
            'destination_account'   => 'destination_account_no' ,
            'destination_country'   => 'destination_country'    ,
            'gateway'               => 'gateway_id'             ,      // Payment gateway used for the payout
            'approved_by'           => 'approved_by_id'         ,  // The admin that approved the payment
            'status'                => 'status'                 ,
            'approved_at'           => 'approved_at'            ,     // The time the payout was approved
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }

    public static function transformedAttribute($index)
    {
        $attributes = [
             'id'                       =>  'identify'           ,
             'description'              =>  'detail'             ,
             'destination_user_id'      =>  'destination_user'   ,
             'destination_account_no'   =>  'destination_account',
             'destination_country'      =>  'destination_country',
             'gateway_id'               =>  'gateway'            ,      // Payment gateway used for the payout
             'approved_by_id'           =>  'approved_by'        ,  // The admin that approved the payment
             'status'                   =>  'status'             ,
             'approved_at'              =>  'approved_at'        ,     // The time the payout was approved

        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
