<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HogeController extends Controller
{
    // route/ns
    public function ns()
    {
        return 'Main\HogeController@ns';
    }
}
