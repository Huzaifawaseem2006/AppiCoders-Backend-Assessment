<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create($validated);

        return response()->json([
            'message' => 'User created successfully',
            'user' => $user,
        ], 201);
    }

    public function index()
    {
        $users = User::all();

        return response()->json([
        'users' => $users,
        ], 200);
    }

    public function show($id)
    {
        $user = User::find($id);

        if (!$user) {
        return response()->json([
            'message' => 'User not found',
        ], 404);
    }

        return response()->json([
        'user' => $user,
        ], 200);
    }
    public function update(Request $request, $id)
{
    $user = User::find($id);

    if (!$user) {
        return response()->json([
            'message' => 'User not found',
        ], 404);
    }

    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $id,
        'password' => 'nullable|string|min:8',
    ]);

    $user->update($validated);

    return response()->json([
        'message' => 'User updated successfully',
        'user' => $user,
    ], 200);
}

public function destroy($id)
{
    $user = User::find($id);

    if (!$user) {
        return response()->json([
            'message' => 'User not found',
        ], 404);
    }

    $user->delete();

    return response()->json([
        'message' => 'User deleted successfully',
    ], 200);
}
}