<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    @extends('layout_format.header')

    @section('container')
    @if ($wishlist -> isEmpty())
        <a href = "{{ route('homepage') }}" class = "btn btn-primary">+ Create New Wishlist</a>
    {{-- href = "{{ route('home') }} to redirect user to home page to add products to the wishlist once the user clicked on the button "+ Create New Wishlist" --}}
    @else
        <ul>
            @foreach($wishlist as $wl)
                <li>
                    <img src = "{{ asset('assets/products/' . $wl -> product -> image) }}" class = "card-img-top img-fluid" style = "height: 400px;">
                    <h3><b>{{ $wl -> product -> name }}</b></h3>
                    <p>{{ $wl -> product -> price }}</p>
                </li>
            @endforeach
        </ul>
    @endsection

    @extends('layout_format.footer')
</body>
</html>
