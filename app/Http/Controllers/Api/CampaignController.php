<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\VicidialCampaign;
use App\Http\Controllers\Controller;

class CampaignController extends Controller
{
    //
    public function index(){

        $users = VicidialCampaign::all();
        return $users;
    }
}
