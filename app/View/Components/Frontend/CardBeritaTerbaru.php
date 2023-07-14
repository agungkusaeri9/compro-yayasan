<?php

namespace App\View\Components\Frontend;

use App\Models\Post;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardBeritaTerbaru extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $berita_terbaru = Post::where('status', 1)->latest()->limit(8)->get();
        return view('components.frontend.card-berita-terbaru', [
            'berita_terbaru' => $berita_terbaru
        ]);
    }
}
