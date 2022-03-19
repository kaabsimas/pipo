<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Inertia\Inertia;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function changeUser(User $user)
    {
        \Auth::login($user);

        return response()->json($user, 200);
    }

    public function getPartners(User $user)
    {
        $partners = $user->partner;

        return response()->json($partners, 200);
    }

    public function createEmployee()
    {
        $users = User::get();
        \Auth::login($users->random());

        return Inertia::render('Example', compact('users'));
    }
}
