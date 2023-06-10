@extends('layout_format.header')

@section('container')
    <div class = "container">
        <h5 style="color: black;">Search Results for "{{ $keyword }}"</h5>

        <div class = "row">
            @if($products -> isEmpty())
                <h5 style = "color:black;"><b>Nothing Found</b></h5>
                <p style = "color:black;">Sorry, but nothing matched with your search queries. Please try again with different keywords.</p>
            @else
                @foreach($products as $product)
                    <div class = "col-md-3 mb-4">
                        <div class = "card">
                            <img src = "{{ asset('assets/products/' . $product -> image) }}" class = "card-img-top img-fluid" style = "height: 400px;">
                            <div class = "card-body">
                                <h5 class = "card-title">{{ $product -> name }}</h5>
                                <p class = "card-text">Quantity: {{ $product -> quantity }}</p>
                                <p class = "card-text">{{ $product -> description }}</p>
                                <p class = "card-text">Price: Rp. {{ $product -> price }}</p>

                                @if(auth() -> user() && auth() -> user() -> role === 'admin')
                                    <div class = "d-flex justify-content-between">
                                        <a href = "{{ route('products.edit', $product -> productID) }}" class = "btn btn-primary btn-lg">Update</a>
                                        <form action = "{{ route('products.delete', $product -> productID) }}" method = "POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type = "submit" class = "btn btn-danger btn-lg">Delete</button>
                                        </form>
                                    </div>

                                @elseif(auth() -> user() && auth() -> user() -> role === 'customer')
                                    <div class = "d-flex justify-content-between">
                                        <form action = "{{ route('wishlist.add', $product -> productID) }}" method = "POST">
                                            @csrf
                                            <button type = "button" class = "btn btn-light">
                                                <i onclick = toggleHeart(this) class = "bi bi-heart red-color"></i>
                                            </button>
                                        </form>
                                        <form action = "{{ route('cart.add', $product -> productID) }}" method = "POST">
                                            @csrf
                                            <button type = "submit" class = "btn btn-success">Add to Cart</button>
                                        </form>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

        <div class="d-flex justify-content-center">
            {{ $products -> links() }}
        </div>
    </div>
@endsection

@extends('layout_format.footer')
