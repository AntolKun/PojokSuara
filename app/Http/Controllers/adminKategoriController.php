<?php

namespace App\Http\Controllers;
use App\Models\Kategori;

use Illuminate\Http\Request;

class AdminKategoriController extends Controller
{
    public function index()
    {
        // $data = Post::all();
        //fetch data
        $data['kategori'] = Kategori::get();

        return view('adminKategori', $data);
    }

    public function store(Request $request)
    {
        $kategori = Kategori::create([
            'kategori' => $request->kategori,
        ]);

        if ($kategori) {
            //redirect to index
            return back()->with('success', 'Data Berhasil Tersimpan');
        } else {
            return back()->with('error', 'Data Gagal Tersimpan');
        }
    }

    public function destroy($id)
    {
        //Delete Image dari Storage
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();

        if ($kategori) {
            //redirect to index
            return back()->with('success', 'Data Berhasil Terhapus');
        } else {
            return back()->with('error', 'Data Gagal Terhapus');
        }
    }
}
