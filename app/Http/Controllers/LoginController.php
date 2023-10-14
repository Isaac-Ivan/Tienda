<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Extension\Table\Table;

class LoginController extends Controller
{
    public function prueba(){
        $query = DB::table('users')->select('*')->get();
        return $query;
    }
}
