<?php

namespace App\Transformers;

use App\Models\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
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
     * @param User $user
     * @return array
     */
    public function transform(User $user)
    {
        return [
            'identifier'   => (int)$user->id,
            'fullname'     => (string)$user->name,
            'email'        => (string)$user->email,
            'isVerified'   => (int)$user->verified,
            'creationDate' => (string)$user->created_at,
            'lastChange'   => (string)$user->updated_at,
            'deletedDate'  => isset($user->deleted_at) ? (string) $user->deleted_at : null,

            'links'        => [
                'rel'      => 'self',
                'href'     =>  route('users.show', $user->id),
            ],
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'identifier'   => 'id',
            'name'         => 'fullname',
            'email'        => 'email',
            'isVerified'   => 'verified',
            'createdDate'  => 'created_at',
            'lastChange'   => 'updated_at',
            'deletedDate'  => 'deleted_at'
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }

    public static function transformedAttribute($index)
    {
        $attributes = [
            'id'           =>    'identifier',
            'fullname'     =>    'name',
            'email'        =>   'email',
            'verified'     =>   'isVerified',
            'created_at'   =>   'createdDate',
            'updated_at'   =>   'lastChange',
            'deleted_at'   =>   'deletedDate',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
