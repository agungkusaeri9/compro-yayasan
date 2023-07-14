<aside class="single_sidebar_widget popular_post_widget">
    <h3 class="widget_title" style="color: #2d2d2d;">Berita Terbaru</h3>
    @forelse ($berita_terbaru as $terbaru)
        <div class="media post_item">
            <img src="{{ $terbaru->image() }}" class="img-fluid" style="max-width: 120px" alt="post">
            <div class="media-body">
                <a href="{{ route('berita.show', $terbaru->slug) }}">
                    <h3 style="color: #2d2d2d;">{{ \Str::limit($terbaru->title, 50, '...') }}
                    </h3>
                </a>
                <p>{{ $terbaru->created_at->translatedFormat('l, d F Y') }}</p>
            </div>
        </div>
    @empty
    @endforelse
</aside>
