<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><h1><b>Order</b></h1></title>
</head>
<body>
    <div class = "product-img">
        <img src = {{ $order -> product -> productImg }}>
    </div>

    <div class = "wishlist-icon">
        <button class = "heart-button" data-item-id = "{{ $order -> product -> productID }}" data-wish-flag = "0">❤️</button>
    </div>

    <div class = "product-disc">
        <p>{{ $order -> product -> description }}</p>
    </div>

    <div class = "product-price">
        <p>{{ $order -> product -> price }}</p>
    </div>

    <div class = "product-desc">
        <p>{{ $order -> product -> description }}</p>
    </div>

    <div class = "product-stock">
        <p>{{ $order -> product -> stock }}</p>
    </div>

    <div class = "brand-name">
        <p>{{ $order -> brand -> brandName }}</p>
    </div>

    <div class = "brand-rating">
        <p>{{ $order -> brand -> brandRating }}</p>
    </div>

    <div class = "brand-desc">
        <p>{{ $order -> brand -> description }}</p>
    </div>

    <div class = "product-rating">
        <p>{{ $order -> product -> productRating }}</p>
    </div>

    <div class = "order-details">
        <a href = "{{ route('order-detail') }}" class = "btn btn-primary">Order Now</a>
    </div>

    <div class = "add-to-cart">
        <a href = "{{ route('cart') }}" class = "btn btn-primary">+ Add to Cart</a>
    </div>
</body>
</html>
