<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        // Validasi dan simpan data user baru
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('users.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
    
        if (!$user) {
            return redirect()->route('users.index')->with('error', 'User not found');
        }
    
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            // Tambahkan validasi untuk field lain sesuai kebutuhan
        ]);
    
        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            // Perbarui field lain sesuai kebutuhan
        ]);
    
        return redirect()->route('users.index')->with('success', 'User updated successfully');
    }
    

    public function destroy($id)
{
    $user = User::find($id);

    if (!$user) {
        return redirect()->route('users.index')->with('error', 'User not found');
    }

    $user->delete();

    return redirect()->route('users.index')->with('success', 'User deleted successfully');
}

}
