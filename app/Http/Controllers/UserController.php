<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\OpenApi\Responses\ListUsersResponse;
use App\OpenApi\Responses\StatsUsersResponse;
use Illuminate\Support\Facades\DB;
use Vyuldashev\LaravelOpenApi\Attributes as OpenApi;

#[OpenApi\PathItem]
class UserController extends Controller
{

    /**
     * List users
     */
    #[OpenApi\Operation(tags: ['user'])]
    #[OpenApi\Response(factory: ListUsersResponse::class)]
    public function index()
    {
        return User::all();
    }

    /**
     * Stats users
     */
    #[OpenApi\Operation(tags: ['user'])]
    #[OpenApi\Response(factory: StatsUsersResponse::class)]
    public function stats()
    {
        return User::select('role', DB::raw('count(*) as count'))
            ->groupBy('role')
            ->get();
    }

}
