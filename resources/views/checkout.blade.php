@section('container')
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
                        <th>Subtotal</th>
                        <th>Shipping Cost</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- harus di-research lagi bagaimana cara memasukkan data order dari customer ke tabel di bagian order summary --}}
                    @foreach($order -> product as $product)
                        <tr>
                            <td>{{ $product -> name }}</td>
                            <td>{{ $product -> quantity }}</td>
                            <td>{{ $product -> price }}</td>
                            <td>{{ $product -> discount }}</td>
                            <td>{{ $order -> shipping -> cost }}</td>
                            <td>{{ ($product -> quantity * $product -> price) + ($order -> shipping -> cost) - ($product -> discount * $product -> price) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <p>Order Total: {{ ($product -> quantity * $product -> price) + ($order -> shipping -> cost) - ($product -> discount * $product -> price) }}</p>
        <div>
        <br>
        <br>
        <label for = "payment-method"><h2><b>Select Payment Method</b></h2></label>
        <div class = "form-group">
            <select class = "form-control" id = "payment-method" name = "payment-method" required>
                <option value = "credit_debit_card">Credit/Debit Card</option> {{-- seharusnya kalau pencet option credit/debit card, redirect user ke page untuk mengisi detail kartu kredit/debit seperti kartu, berlaku hingga, dan CVV (mm/yyyy) --}}
                <option value = "paypal">PayPal</option>
                <option value = "gopay">GoPay</option>
                <option value = "shopeepay">ShopeePay</option>
                <option value = "link-aja">Link Aja</option>
                <option value = "dana">Dana</option>
            </select>
        </div>
        <div>
            <button type = "submit">Confirm Payment</button>
        </div>

        {{-- setelah payment confirmed, redirect ke payment summary page --}}
    </form>
@endsection

{{-- References --}}
{{-- a. https://mdbootstrap.com/docs/standard/extended/payment-forms/ --}}
