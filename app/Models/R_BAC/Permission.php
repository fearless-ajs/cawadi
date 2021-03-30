<?php

namespace App\Models\R_BAC;

use Illuminate\Database\Eloquent\SoftDeletes;
use Laratrust\Models\LaratrustPermission;

class Permission extends LaratrustPermission
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    public $guarded = [];

}
