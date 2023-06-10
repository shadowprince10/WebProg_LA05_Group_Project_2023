<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    @extends('layout_format.header')

    @section('container')
        <div class = "container">
            <h1 style = "color:black;"><b>Products</b></h1>
            @if(auth() -> user() && auth() -> user() -> role === 'admin') {{-- if user has been authenticated to be admin --}}
                <div class = "mb-3">
                    <a href = "{{ route('products.create') }}" class="btn btn-primary">Post Products</a>
                </div>
            @endif
        </div>

    <div class = "row">
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
    </div>

    <div class= "d-flex justify-content-center mt-4">
        {{ $products -> links() }}
    </div>
</div>
@endsection

@extends('layout_format.footer')
</body>
</html>


{{-- References --}}
{{-- a. https://icons.getbootstrap.com/icons/heart/ --}}
{{-- b. https://fontawesomeicons.com/bootstrap/icons/heart --}}
{{-- c. https://www.w3schools.com/howto/howto_js_toggle_like.asp --}}
