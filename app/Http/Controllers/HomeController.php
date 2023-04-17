<?php

namespace App\Http\Controllers;

use App\Models\Breaking;
use App\Models\Carousel;
use App\Models\Kategori;
use App\Models\Tag;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['breaking'] = Breaking::get();
        $data['carousel'] = Carousel::get();
        $data['kategori'] = Kategori::get();
        $data['tag'] = Tag::limit(10)->get();
        $data['kateheader'] = Kategori::limit(7)->get();
        $data['katesedikit'] = Kategori::limit(5)->get();
        $data['post'] = Post::latest('tanggal')->limit(7)->get();
        $data['postlokal'] = Post::limit(4)->where('kategori', 'Lokal')->latest('tanggal')->get();
        $data['postnasional'] = Post::limit(4)->where('kategori', 'Nasional')->latest('tanggal')->get();
        $data['postrekomen'] = Post::offset(4)->limit(4)->latest('tanggal')->get();
        return view('welcome', $data);
    }

    public function readBerita($slug)
    {
        $data['kateheader'] = Kategori::limit(7)->get();
        $data['tag'] = Tag::limit(10)->get();
        $data['katesedikit'] = Kategori::limit(5)->get();
        $data['postrekomen'] = Post::offset(4)->limit(4)->get();
        $data['postpopuler'] = Post::offset(10)->limit(5)->get();
        $post = Post::where('slug', $slug)->first();

        return view('readberita', $data, [
            'post' => $post,
        ]);
    }

    public function kategoriLokal()
    {
        $data['kateheader'] = Kategori::limit(7)->get();
        $data['tag'] = Tag::limit(10)->get();
        $data['katesedikit'] = Kategori::limit(5)->get();
        $data['postrekomen'] = Post::offset(4)->limit(4)->get();
        $data['postpopuler'] = Post::offset(10)->limit(5)->get();
        $data['post'] = Post::where('kategori', 'Lokal')->latest('tanggal')->limit(20)->get();

        return view('kategori.kategoriLokal', $data
        );
    }

    public function kategoriNasional()
    {
        $data['kateheader'] = Kategori::limit(7)->get();
        $data['tag'] = Tag::limit(10)->get();
        $data['katesedikit'] = Kategori::limit(5)->get();
        $data['postrekomen'] = Post::offset(4)->limit(4)->get();
        $data['postpopuler'] = Post::offset(10)->limit(5)->get();
        $data['post'] = Post::where('kategori', 'Nasional')->latest('tanggal')->limit(20)->get();

        return view('kategori.kategoriNasional', $data
        );
    }

    public function kategoriInternasional()
    {
        $data['kateheader'] = Kategori::limit(7)->get();
        $data['tag'] = Tag::limit(10)->get();
        $data['katesedikit'] = Kategori::limit(5)->get();
        $data['postrekomen'] = Post::offset(4)->limit(4)->get();
        $data['postpopuler'] = Post::offset(10)->limit(5)->get();
        $data['post'] = Post::where('kategori', 'Internasional')->latest('tanggal')->limit(20)->get();

        return view('kategori.kategoriInternasional', $data
        );
    }
}
