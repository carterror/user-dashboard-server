<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function index()
    {
        return User::all();
    }

    public function stats()
    {
        return User::select('role', DB::raw('count(*) as count'))
            ->groupBy('role')
            ->get();
    }

}
