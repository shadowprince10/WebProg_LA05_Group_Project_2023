@extends('layout_format.header')

@section('container')
    {{-- OUtfits Category Section --}}
    <div class = "section-title">
        <h2 style = "color:antiquewhite;"><b>Clothes</b></h2>
        <br>
        {{-- 3 gambar clothes berderet --}}
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src = "assets/anime-market-items/clothes/animeclothes2.jpg" class = "card-img-top img-fluid" style = "height: 400px;">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <p class="card-text">Price: Rp. {{ $product->price }}</p>

                    <form action="{{ route('cart.add', $product->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-success">Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card">
                <img src = "assets/anime-market-items/clothes/animeclothes3.jpg" class = "card-img-top img-fluid" style = "height: 400px;">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <p class="card-text">Price: Rp. {{ $product->price }}</p>

                    <form action="{{ route('cart.add', $product->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-success">Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card">
                <img src = "assets/anime-market-items/clothes/animeclothes4.jpg" class = "card-img-top img-fluid" style = "height: 400px;">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <p class="card-text">Price: Rp. {{ $product->price }}</p>

                    <form action = "{{ route('cart.add', $product->id) }}" method="POST">
                        @csrf
                        <button type = "submit" class = "btn btn-success">Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Figure Category Section --}}
    <div class = "section-title">
        <h2 style = "color:antiquewhite;"><b>Figure</b></h2>
        <br>
            {{-- 3 gambar figures berderet --}}
            <img src = "assets/anime-market-items/figure/fig1.jpg" class = "figure">
            <img src = "assets/anime-market-items/figure/fig2.jpg" class = "figure">
            <img src = "assets/anime-market-items/figure/fig3.jpg" class = "figure">
    </div>

    {{-- Key Chain Category Section --}}
    <div class = "section-title">
        <h2 style = "color:antiquewhite;"><b>Key Chain</b></h2>
        <br>
            {{-- 3 gambar key chains berderet --}}
        <img src = "assets/anime-market-items/keychain/kc1.jpg" class = "keychain">
        <img src = "assets/anime-market-items/keychain/kc2.jpg" class = "keychain">
        <img src = "assets/anime-market-items/keychain/kc3.jpg" class = "keychain">
    </div>

    {{-- Stationery Category Section --}}
    <div class = "section-title">
        <h2>Stationery</h2>
        <br>
            {{-- 3 gambar key chains berderet --}}
        <img src = "assets/anime-market-items/stationery/stationery1.jpg" class = "stationery">
        <img src = "assets/anime-market-items/stationery/stationery2.jpg" class = "stationery">
        <img src = "assets/anime-market-items/stationery/stationery3.jpg" class = "stationery">
    </div>

    {{-- Manga (Comic) Category Section --}}
    <section id = "manga" class = "manga">
        <div class = "section-title">
            <h2>Manga</h2>
            <br>
            {{-- 3 gambar komik manga berderet --}}
            <img src = "assets/anime-market-items/manga/komik_black_clover1.jpg" class = "manga">
            <img src = "assets/anime-market-items/manga/komik_horimiya3.jpg" class = "manga">
            <img src = "assets/anime-market-items/manga/komik_one_punch_man_vol2.jpg" class = "manga">
        </div>
    </section>

    {{-- Novel Category Section --}}
    <section id = "novel" class = "novel">
        <div class = "section-title">
            <h2>Novel</h2>
            <br>
            {{-- 3 gambar novel berderet --}}
            <img src = "assets/anime-market-items/novel/black_bullet_light_novel.jpg" class = "novel">
            <img src = "assets/anime-market-items/figure/killer_kurumi_light_novel.jpg" class = "novel">
            <img src = "assets/anime-market-items/figure/sword_art_online_light_novel.jpg" class = "novel">
        </div>
    </section>

    {{-- 2nd Category/Category Filter: Most Favourite, Best Sales, New Arrival --}}


</html>
@endsection

{{-- Footer --}}
@extends('layout_format.footer')

{{-- REFERENCES --}}
{{-- a. https://www.youtube.com/watch?v=XdaDDmC00fs --}}
{{-- b. https://www.nicesnippets.com/blog/how-to-add-carousel-slider-in-laravel --}}
{{-- c. https://gist.github.com/evercode1/f020573b54f9da2d727e --}}
