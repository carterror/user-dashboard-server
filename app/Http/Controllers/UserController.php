<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

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

    // public function index()
    // {
    //     $users = User::paginate(10);
    //     $stats = User::select('role', DB::raw('count(*) as count'))
    //         ->groupBy('role')
    //         ->get();



    //     return Inertia::render('Dashboard', [
    //         'users' => $users,
    //         'stats' => $stats,
    //     ])->with('message', 'Filtro aplicado correctamente.');
    // }

    // public function filter($role)
    // {

    //     if (!in_array($role, ['manager', 'revisor', 'comprador'])) {
    //         abort(400, 'Rol inválido.');
    //     }

    //     $users = User::where('role', $role)->paginate(10);

    //     return Inertia::render('Dashboard', [
    //         'users' => $users,
    //         'stats' => User::select('role', DB::raw('count(*) as count'))
    //             ->groupBy('role')
    //             ->get(),
    //     ]);
    // }


}
