<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestUsers extends Controller
{
    public function users(Request $request)
    {
        //$users = DB::table('users')->get();
        $users = DB::select('select * from users where `id` = ?', [1]);

        return $users;
    }   
}
