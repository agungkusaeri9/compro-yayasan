<aside class="single_sidebar_widget search_widget">
    <form action="{{ route('berita.cari') }}" method="get">
        <div class="form-group">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder='Search Keyword' onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Search Keyword'" name="keyword" value="{{ request('keyword') }}">
                <div class="input-group-append">
                    <button class="btns" type="submit"><i class="ti-search"></i></button>
                </div>
            </div>
        </div>
    </form>
</aside>
