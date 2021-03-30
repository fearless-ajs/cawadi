<?php

namespace App\Models\R_BAC;

use Illuminate\Database\Eloquent\SoftDeletes;
use Laratrust\Models\LaratrustRole;

class Role extends LaratrustRole
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public $guarded = [];


}
