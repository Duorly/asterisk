<?php

namespace App\Http\Controllers\Api;

use App\Models\VicidialUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //
    public function index(){

        $users = VicidialUser::all();
        return $users;
    }
}
