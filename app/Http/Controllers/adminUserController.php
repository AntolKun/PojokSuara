<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index()
    {
        // $data = Post::all();
        //fetch data
        $data['user'] = User::get();

        return view('adminUser', $data);
    }

    public function store(Request $request)
    {
        //upload image
        $foto = $request->file('foto');
        // upload file
		$foto->move('foto', $foto->getClientOriginalName());
        // $gambar->storeAs('pu1blic/posts', $gambar->hashName());

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'foto' => $foto->getClientOriginalName(),
            'role' => $request->role,
            'password' => $request->password,
            'no_telp' => $request->no_telp,
        ]);

        if ($user) {
            //redirect to index
            return back()->with('success', 'Data Berhasil Tersimpan');
        } else {
            return back()->with('error', 'Data Gagal Tersimpan');
        }
    }

    public function destroy($id)
    {
        //Delete Image dari Storage
        $user = User::findOrFail($id);
        $user->delete();

        if ($user) {
            //redirect to index
            return back()->with('success', 'Data Berhasil Terhapus');
        } else {
            return back()->with('error', 'Data Gagal Terhapus');
        }
    }
}
