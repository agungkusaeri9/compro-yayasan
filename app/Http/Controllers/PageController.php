<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Setting;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public $setting;
    public function __construct()
    {
        $this->setting = Setting::first();
    }

    public function home()
    {
        $berita_terbaru = Post::where('status', 1)->latest()->limit(6)->get();
        return view('pages.home', [
            'title' => 'Selamat datang di website resmi yayasan.',
            'setting' => $this->setting,
            'berita_terbaru' => $berita_terbaru
        ]);
    }

    public function visi_misi()
    {

        return view('pages.visi-misi', [
            'title' => 'Visi Misi',
            'setting' => $this->setting
        ]);
    }

    public function tentang()
    {
        return view('pages.tentang', [
            'title' => 'Tentang Kami',
            'setting' => $this->setting
        ]);
    }

    public function kontak()
    {
        return view('pages.kontak', [
            'title' => 'Kontak Kami',
            'setting' => $this->setting
        ]);
    }
}
