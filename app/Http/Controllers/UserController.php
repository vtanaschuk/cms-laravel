<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('rooms', ['users' => $users]);
    }

    public function singleUser(int $id)
    {
        $user = User::find($id);
        return view('single-user', ['user' => $user]);
    }

    public function editSingleUser(int $id)
    {
        $user = User::find($id);
        return view('edit-single-user', ['user' => $user]);
    }

    public function update(Request $request, int $id)
    {

        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $user = User::findOrFail($id);

        $user->name = $request->input('name');
        $user->save();
        return redirect()->to(url("/dashboard/user/{$id}"))->with('success', 'User updated successfully');
    }

}
