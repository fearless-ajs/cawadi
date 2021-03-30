<?php

namespace App\Transformers;

use App\Models\Payments\Payin;
use League\Fractal\TransformerAbstract;

class PayinTransformer extends TransformerAbstract
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
     * @param Payin $payin
     * @return array
     */
    public function transform(Payin $payin)
    {
        return [
            'identify'           => $payin->id,
            'detail'             => $payin->description,
            'sender_user'        => $payin->sender_user_id,
            'sender_account'     => $payin->sender_account_no,
            'sender_country'     => $payin->sender_country,
            'gateway'            => $payin->gateway_id ,      // Payment gateway used for the payout
            'acknowledged_by'    => $payin->acknowledged_by_id,  // The admin that approved the payment
            'status'             => $payin->status,
            'acknowledged_at'    => $payin->acknowledged_at,     // The time the payout was approved
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'identify'           => 'id',
            'detail'             => 'description',
            'sender_user'        => 'sender_user_id',
            'sender_account'     => 'sender_account_no',
            'sender_country'     => 'sender_country',
            'gateway'            => 'gateway_id',      // Payment gateway used for the payout
            'acknowledged_by'    => 'acknowledged_by_id',  // The admin that approved the payment
            'status'             => 'status',
            'acknowledged_at'    => 'acknowledged_at',     // The time the payout was approved
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }

    public static function transformedAttribute($index)
    {
        $attributes = [
           'id'                    => 'identify'        ,
           'description'           => 'detail'          ,
           'sender_user_id'        => 'sender_user'     ,
           'sender_account_no'     => 'sender_account'  ,
           'sender_country'        => 'sender_country'  ,
           'gateway_id'            => 'gateway'         ,      // Payment gateway used for the payout
           'acknowledged_by_id'    => 'acknowledged_by' ,  // The admin that approved the payment
           'status'                => 'status'          ,
           'acknowledged_at'       => 'acknowledged_at' ,     // The time the payout was approved

        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
