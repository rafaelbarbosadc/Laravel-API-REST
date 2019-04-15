<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class UsersController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function show(User $user)
    {
        return $user;
    }

    public function store(Request $request)
    {
        $user = User::create($request->all());

        return response()->json($user, 201);
    }

    public function update(Request $request, User $user)
    {
        $user->update($request->all());

        return response()->json($user,200);
    }

    public function delete(Request $request, $id)
    {
        $user->delete();

        return response()->json(null, 204);
    }

    public function getByName(Request $request, $term)
    {
       $user = User::where('name', 'like', "%$term%")->get();

       return response()->json($user, 201);
    }

    public function login(Request $request, $email, $password)
    {
        $user = User::where('email', '=', $email)->get();
        return response()->json($user,201);
    }
}
