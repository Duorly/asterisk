<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\VicidialStatus;
use App\Http\Controllers\Controller;

class StatusController extends Controller
{
    //
    public function index(){

        $statuses = VicidialStatus::all();
        return $statuses;
    }
}
