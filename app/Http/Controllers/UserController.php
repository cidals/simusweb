<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function profile()
    {
        // dd('Ini Halaman Profie User');
        return view('profile');
        //dd(Auth::user());
    }

    public function index()
    {
        $users = User::all();
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
}
