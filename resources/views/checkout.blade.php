<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href = "/css/bootstrap.min.css" rel = "stylesheet">
    <title><h1><b><u>Checkout</u></b></h1></title>
</head>
<body>
    <form method = "POST" action = "/payment">
        @csrf

        <h2>Order Summary</h2>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Price per Product</th>
                        <th>Discount</th>
                        <th>Shipping Cost</th>
                        <th>Total Price</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- harus di-research lagi bagaimana cara memasukkan data order dari customer ke tabel di bagian order summary --}}
                    @foreach($order -> product as $item)
                        <tr>
                            <td>{{ $item -> productName }}</td>
                            <td>{{ $item -> productQuantity }}</td>
                            <td>{{ $item -> price }}</td>
                            <td>{{ $item -> productQuantity * $item -> price }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <p>Order Total: {{ $order -> orderSubtotal }}</p>
        <div>
        <br>
        <br>
        <label for = "payment-method"><h2><b>Select Payment Method</b></h2></label>
        <div class = "payment-form-group">
            <select class = "payment-form-control" id = "payment-method" name = "payment-method" required>
                <option value = "credit_debit_card">Credit/Debit Card</option> {{-- seharusnya kalau pencet option credit/debit card, redirect user ke page untuk mengisi detail kartu kredit/debit seperti kartu, berlaku hingga, dan CVV (mm/yyyy) --}}
                <option value = "paypal">PayPal</option>
                <option value = "gopay">GoPay</option>
                <option value = "shopeepay">ShopeePay</option>
                <option value = "link-aja">Link Aja</option>
                <option value = "dana">Dana</option>
            </select>
        </div>
        <div>
            <button type = "submit">Pay Now</button>
        </div>

        {{-- cara setelah payment confirmed, lalu redirect ke payment success page, kemudian redirect ke payment summary page? --}}
    </form>
</body>
</html>
