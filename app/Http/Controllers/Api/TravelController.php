<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Travel;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    public function current()
    {
        return Travel::current();
    }
}
