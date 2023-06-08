<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><h2><b>My Wishlist</b></h2></title>
</head>
<body>
    @if ($wishlistProducts -> isEmpty())
        <a href = "{{ route('home') }}" class = "btn btn-primary">+ Create New Wishlist</a>
    {{-- href = "{{ route('home') }} to redirect user to home page to add products to the wishlist once the user clicked on the button "+ Create New Wishlist" --}}
    @else
        <ul>
            @foreach($wishlistProducts)
                <li>
                    <h3><b>{{ $wishlistProducts -> product -> productName }}</b></h3>
                    <p>{{ $wishlistProducts -> product -> price }}</p>
                </li>
            @endforeach
        </ul>
</body>
</html>