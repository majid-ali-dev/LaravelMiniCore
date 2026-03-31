<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends BaseController
{
    public function index()
    {
        $this->authorize('manage-users');

        $users = User::where('role', 'user')
            ->where('id', '!=', auth()->id())
            ->latest()
            ->get();

        return view('users.index', compact('users'));
    }

    public function create()
    {
        $this->authorize('manage-users');

        return view('users.create');
    }

    public function store(Request $request)
    {
        $this->authorize('manage-users');

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:5',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return $this->successRedirect('users.index', 'User created successfully.');
    }

    public function edit(User $user)
    {
        $this->authorize('manage-users');

        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $this->authorize('manage-users');

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,'.$user->id,
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return $this->successRedirect('users.index', 'User updated successfully.');
    }

    public function destroy(User $user)
    {
        $this->authorize('manage-users');
        
        $user->delete();

        return $this->successRedirect('users.index', 'User deleted successfully.');
    }
}
