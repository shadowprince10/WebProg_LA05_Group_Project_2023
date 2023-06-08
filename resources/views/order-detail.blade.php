<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><h1><b>Order Detail</b></h1></title>
    <!-- J-Query library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- JS Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class = "product-details">
        <img src = "">
        <h3><b>{{ $order -> product -> productName }}</b></h3>
        <br>
        <h4>{{ $order -> product -> price }}</h3>
    </div>

    <div class = "order-quantity">
        <button id = "reduceButton">-</button>
        <input type = "text" id = "quantityInput" value = "1" readonly>
        <button id = "addButton">+</button>
    </div>

    <script>
        const reduceButton = document.getElementById('reduceButton');
        const addButton = document.getElementById('addButton');
        const quantityInput = document.getElementById('quantityInput');

        reduceButton.addEventListener('click', () => {
            let quantity = parseInt(quantityInput.value);
            if (quantity > 1) {
                quantity--;
                quantityInput.value = quantity;
            }
        });
    </script>

    <div class = "checkout">
        <a href = "{{ route('checkout') }}" class = "btn btn-primary">Checkout</a>
    </div>
</body>
</html>
