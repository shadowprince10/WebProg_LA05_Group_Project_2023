<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><h1>Cart</h1></title>
</head>
<body>
    <div class="cart">
        @if(count($cartProducts) > 0)
            <table>
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cartProducts)
                        <tr>
                            <td>{{ $cartProducts -> product -> productName }}</td>
                            <td>{{ $cartProducts -> product -> price }}</td>
                            <td>{{ $cartProducts -> product -> productQuantity }}</td>
                            <td>{{ ($cartProducts -> product -> price) * ($cartProducts -> product -> productQuantity) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Your cart is empty.</p>
        @endif

        <div class="cart-total">
            <h3>Total: {{ $cartTotal }}</h3>
        </div>

        <div class="checkout-button">
            <a href="{{ route('checkout') }}">Checkout</a>
        </div>
    </div>
</body>
</html>