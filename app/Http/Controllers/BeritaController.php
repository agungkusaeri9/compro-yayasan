<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $keyword = request('keyword');
        if ($keyword) {
            $items = Post::where('status', 1)->where('title', 'like', '%' . $keyword . '%')->orWhere('short_description', 'like', '%' . $keyword . '%')->latest()->paginate(8);
        } else {
            $items = Post::where('status', 1)->latest()->paginate(8);
        }
        return view('pages.berita.index', [
            'items' => $items,
            'title' => 'Berita Terbaru'
        ]);
    }

    public function show($slug)
    {
        $item = Post::where('status', 1)->where('slug', $slug)->firstOrFail();
        $item->increment('visitor', 1);
        $berita_terbaru = Post::where('status', 1)->latest()->limit(8)->get();
        return view('pages.berita.show', [
            'item' => $item,
            'title' => $item->title,
            'berita_terbaru' => $berita_terbaru
        ]);
    }

    public function komentar($id)
    {
        request()->validate([
            'comment' => ['required'],
        ]);


        // cek simpan apakah di ceklis
        if (request('simpan')) {
            session([
                'name' => request('name'),
                'email' => request('email')
            ]);
        } else {
            request()->validate([
                'name' => ['required'],
                'email' => ['required', 'email']
            ]);
        }

        $item = Post::findOrFail($id);
        $item->comments()->create([
            'name' => session('name') ?? request('name'),
            'email' => session('name') ?? request('email'),
            'comment' => session('name') ?? request('comment')
        ]);

        return redirect()->back()->with('success', 'Komentar anda berhasil terkirim.');
    }
}
