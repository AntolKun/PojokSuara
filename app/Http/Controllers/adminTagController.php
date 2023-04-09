<?php

namespace App\Http\Controllers;
use App\Models\Tag;

use Illuminate\Http\Request;

class AdminTagController extends Controller
{
    public function index()
    {
        // $data = Post::all();
        //fetch data
        $data['tag'] = Tag::get();

        return view('adminTag', $data);
    }

    public function store(Request $request)
    {
        $tag = Tag::create([
            'tag' => $request->tag,
        ]);

        if ($tag) {
            //redirect to index
            return back()->with('success', 'Data Berhasil Tersimpan');
        } else {
            return back()->with('error', 'Data Gagal Tersimpan');
        }
    }

    public function destroy($id)
    {
        //Delete Image dari Storage
        $tag = Tag::findOrFail($id);
        $tag->delete();

        if ($tag) {
            //redirect to index
            return back()->with('success', 'Data Berhasil Terhapus');
        } else {
            return back()->with('error', 'Data Gagal Terhapus');
        }
    }
}
