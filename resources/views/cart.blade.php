<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
</head>
<body>
    @section('container')
        <section class = "vh-100">
            <div class = "container h-100">
                <div class = "row d-flex justify-content-center align-items-center h-100">
                    <div class = "col">
                        {{-- <h2 style = "color:black;">Cart</h2> --}} {{-- for title --}}
                        <div class = "card mb-4">
                            <div class = "card-body p-4">
                                <div class = "row align-items-center">
                                    @foreach($cartProducts as $cp)
                                        <div class = "col-md-2">
                                            <img src = "{{ asset('assets/products/' . $cp -> image) }}" class = "img-fluid">
                                        </div>

                                        <div class = "col-md-2 d-flex justify-content-center">
                                            <div>
                                                <p class = "small text-muted mb-4 pb-2">Name</p>
                                                <p class = "lead fw-normal mb-0">{{ $cp -> name }}</p>
                                            </div>
                                        </div>

                                        <div class = "col-md-2 d-flex justify-content-center">
                                            <div>
                                                <p class = "small text-muted mb-4 pb-2">Price</p>
                                                <p class = "lead fw-normal mb-0">{{ $cp -> price }}</p>
                                            </div>
                                        </div>

                                        <div class = "col-md-2 d-flex justify-content-center">
                                            <div>
                                                <p class = "small text-muted mb-4 pb-2">Quantity</p>
                                                <p class = "lead fw-normal mb-0">{{ $cp -> quantity }}</p>
                                            </div>
                                        </div>

                                        <div class = "col-md-2 d-flex justify-content-center">
                                            <div>
                                                <p class = "small text-muted mb-4 pb-2">Discount</p>
                                                <p class = "lead fw-normal mb-0">{{ $cp -> discount }}</p>
                                            </div>
                                        </div>

                                        <div class = "col-md-2 d-flex justify-content-center">
                                            <div>
                                                <p class = "small text-muted mb-4 pb-2">Delivery Costs</p>
                                                <p class = "lead fw-normal mb-0">{{ $deliveryCost }}</p>
                                            </div>
                                        </div>

                                        <div class = "col-md-2 d-flex justify-content-center">
                                            <div>
                                                <p class = "small text-muted mb-4 pb-2">Subtotal</p>
                                                <p class = "lead fw-normal mb-0">{{ ($cp -> price * $cp -> quantity) + ($totalCost) - ($cp -> discount * $cp -> price) }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class = "d-flex justify-content-end">
                            <a class = "btn btn-danger" href = "{{ route('cart.checkout') }}">Checkout</a>
                        </div>
                    </div>
                </div>
            @else
                <div class = "d-flex justify-content-end">
                    <p>Oops, your cart is empty... go explore products you'd like to buy!</p>
                    <a class = "btn btn-primary btn-lg" href = "{{ route('products.view') }}">Shop Now</a>
                </div>
            @endif
        </div>
    @endsection
</body>
</html>
