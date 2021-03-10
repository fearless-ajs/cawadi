<?php

namespace App\Models\Payments;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gateway extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'link',
      'secret',
      'secret_key',
      'status',    //Disabled and Active
    ];

}
