<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function __invoke(Request $request) {
        $user = User::create($request->all());

        return response()->json(['data' => $user], 201);
    }
}
