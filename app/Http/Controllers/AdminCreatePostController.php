<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class AdminCreatePostController extends Controller
{
    public function index()
    {
        $data['kategori'] = Kategori::get();
        $data['user'] = User::get();
        $data['tag'] = Tag::get();
        return view('adminCreatePost', $data );
    }

    public function store(Request $request)
    {
        // dd($request->all());

        // $request->validate([
        //     'judul' => 'required',
        //     'subjudul' => 'required',
        //     'tanggal' => 'required',
        //     'kategori' => 'required',
        //     'isiartikel' => 'required',
        //     'staff' => 'required',
        //     // 'gambar' => 'required|image|mimes:jpeg,png,jpg|max:5120'
        // ]);


        //upload image
        $gambar = $request->file('gambar');
        // upload file
		$gambar->move('posts', $gambar->getClientOriginalName());
        // $gambar->storeAs('pu1blic/posts', $gambar->hashName());

        //create post
        $post = Post::create([
            'judul' => $request->judul,
            'subjudul' => $request->subjudul,
            'slug' => $request->slug,
            'tanggal' => $request->tanggal,
            'kategori' => $request->kategori,
            'isiartikel' => $request->isiartikel,
            'user' => $request->user,
            'gambar' => $gambar->getClientOriginalName(),
            'tag1' => $request->tag1,
            'tag2' => $request->tag2,
            'tag3' => $request->tag3,
        ]);

        // dd($request->all());

        if ($post) {
            //redirect to index
            return back()->with('success', 'Data Berhasil Tersimpan');
        } else {
            return back()->with('error', 'Data Gagal Tersimpan');
        }
    }

}
