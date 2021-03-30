<?php

namespace App\Http\Controllers\Util;

use App\Http\Controllers\Controller;
use App\Traits\ApiResponser;


class ApiController extends Controller
{
    use ApiResponser; //Allows us to have access to all the methods in ApiResponser

    public function __construct()
    {

    }
}
