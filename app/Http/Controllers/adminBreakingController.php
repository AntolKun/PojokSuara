<?php

namespace App\Http\Controllers;
use App\Models\Breaking;

use Illuminate\Http\Request;

class AdminBreakingController extends Controller
{
    public function index()
    {
        // $data = Post::all();
        //fetch data
        $data['breaking'] = Breaking::get();

        return view('adminBreaking', $data);
    }

    public function store(Request $request)
    {
        $breaking = Breaking::create([
            'breaking' => $request->breaking,
        ]);

        if ($breaking) {
            //redirect to index
            return back()->with('success', 'Data Berhasil Tersimpan');
        } else {
            return back()->with('error', 'Data Gagal Tersimpan');
        }
    }

    public function destroy($id)
    {
        //Delete Image dari Storage
        $breaking = Breaking::findOrFail($id);
        $breaking->delete();

        if ($breaking) {
            //redirect to index
            return back()->with('success', 'Data Berhasil Terhapus');
        } else {
            return back()->with('error', 'Data Gagal Terhapus');
        }
    }
}
