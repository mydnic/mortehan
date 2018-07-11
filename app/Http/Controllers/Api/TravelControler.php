<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Travel;
use Illuminate\Http\Request;

class TravelControler extends Controller
{
    public function current()
    {
        return Travel::current();
    }
}
