<?php

namespace App\Http\Controllers\Api;

use App\Models\VicidialList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListController extends Controller
{
    //
    public function index(){

        $lists = VicidialList::all();
        return $lists;
    }
}
