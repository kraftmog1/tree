<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class BaseController extends Controller
{
    public function getIndex(){
       return response()->json(User::all());
    }
}
