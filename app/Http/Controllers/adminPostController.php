<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class AdminPostController extends Controller
{
    // public function index()
    // {
    //     return view('adminPost');
    // }

    public function index()
    {
        // $data = Post::all();
        //fetch data
        $data['post'] = Post::where('status', true)->get();

        //response with api
        // return response()->json($response);
        return view('adminPost', $data);
    }

    public function edit(Request $id)
    {
        $data['post'] = POST::where('id', $id)->first();
        return view('adminEditPost', $data);
    }

    public function destroy($id)
    {
        //Delete Image dari Storage
        $post = Post::findOrFail($id);
        $post->delete();

        if ($post) {
            //redirect to index
            return back()->with('success', 'Data Berhasil Terhapus');
        } else {
            return back()->with('error', 'Data Gagal Terhapus');
        }
    }
}
