<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\Request;

class AdminCarouselController extends Controller
{
    public function index()
    {
        // $data = Post::all();
        //fetch data
        $data['carousel'] = Carousel::get();

        return view('adminCarousel', $data);
    }

    public function store(Request $request)
    {
        //upload image
        $carousel = $request->file('carousel');
        // upload file
		$carousel->move('carousel', $carousel->getClientOriginalName());
        // $gambar->storeAs('pu1blic/posts', $gambar->hashName());

        //create post
        $carousel = carousel::create([
            'carousel' => $carousel->getClientOriginalName(),
            'judul' => $request->judul,
            'subjudul' => $request->subjudul,
        ]);

        if ($carousel) {
            //redirect to index
            return back()->with('success', 'Data Berhasil Tersimpan');
        } else {
            return back()->with('error', 'Data Gagal Tersimpan');
        }
    }

    public function destroy($id)
    {
        //Delete Image dari Storage
        $carousel = Carousel::findOrFail($id);
        $carousel->delete();

        if ($carousel) {
            //redirect to index
            return back()->with('success', 'Data Berhasil Terhapus');
        } else {
            return back()->with('error', 'Data Gagal Terhapus');
        }
    }

}
