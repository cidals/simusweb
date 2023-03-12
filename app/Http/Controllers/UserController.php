<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function profile($slug)
    {
        $user = User::where('slug', $slug)->first();
        return view('profile', ['user' => $user]);
        //dd(Auth::user());
    }

    public function index()
    {
        $users = User::where('role_id', '=', 2)->get();
        return view('users', ['users' => $users]);
    }

    public function add()
    {
        return view('user-add');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users|max:255',
            'password' => 'required',
            'address' => 'required',
        ]);
        $user = User::create(array_merge($request->only('name', 'username', 'address'),[
            'password' => Hash::make($request->password)
        ]));

        return redirect('users')->with('status', 'User baru sukses ditambahkan');
    }

    public function show($slug)
    {
        $user = User::where('slug', $slug)->first();

        return view('user-show', ['user' => $user]);
    }

    public function edit($slug)
    {
        $user = User::where('slug', $slug)->first();

        return view('user-edit', ['user' => $user]);
    }

    public function update(Request $request, $slug)
    {
        $validated = $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users|max:255',
            'password' => 'required',
            'address' => 'required',
        ]);
        $user = User::where('slug', $slug)->first();
        $user->slug = null;
        $user->update(array_merge($request->only('name', 'username', 'address'),[
            'password' => Hash::make($request->password)
        ]));

        return redirect('users')->with('status', 'User baru berhasil diubah');
    }

    public function delete($slug)
    {
        $user = User::where('slug', $slug)->first();

        return view('user-delete', ['user' => $user]);
    }

    public function destroy($slug)
    {
        $user = User::where('slug', $slug)->first();
        $user->delete();

        return redirect('users')->with('status', 'User berhasil dihapus');
    }

    public function deleteduser()
    {
        $user = User::onlyTrashed()->get();

        return view('user-deleted-list', ['user' => $user]);
    }

    public function restore($slug)
    {
        $user = User::onlyTrashed('slug', $slug)->first();
        $user->restore();

        return back()->with('status', 'User berhasil dikembalikan');
    }

    public function restoreAll()
    {
        $user = User::onlyTrashed()->restore();

        return redirect('users')->with('status', 'Semua User berhasil dikembalikan');
    }
}
