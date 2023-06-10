@extends('layout_format.header')

@section('container')
    <main class = "mt-5 pt-4">
        <div class="container wow fadeIn">
            <h2 class = "my-5 h2 text-center" style = "color:blue;">Checkout</h2>

            {{-- grid row --}}
            <div class = "row">
                {{-- grid column --}}
                <div class = "col-md-8 mb-4">
                    {{-- checkout form in card form --}}
                    <div class = "card">
                        <form class="card-body">
                            <div class = "row">
                                <div class = "col-md-6 mb-2">
                                    <div class = "md-form ">
                                        {{-- Address (optional) --}}
                                        <div class = "md-form mb-5">
                                            <input type = "text" id = "address" class = "form-control">
                                            <label for = "address" class="">Delivery Address (optional)</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- checkbox to check that delivery address above is the same as user's registered address. If so, then user doesn't need to fill new address above. --}}
                            <hr>
                                <div class = "custom-control custom-checkbox">
                                    <input type = "checkbox" class = "custom-control-input" id = "same-address">
                                    <label class = "custom-control-label" for = "same-address">Delivery address is the same as my registered address</label>
                                </div>
                            <hr>

                            <h5 class = "my-5 h2 text-center" style = "color:black;"><b>Payment</b></h5>

                            <div class = "card mb-4 mb-lg-0">
                                <div class = "card-body">
                                    <div class = "form-group">
                                        <select class = "form-control" id = "payment-method" name = "payment-method" required>
                                            <option value = "credit_debit_card">Credit/Debit Card</option> {{-- seharusnya kalau pencet option credit/debit card, redirect user ke page untuk mengisi detail kartu kredit/debit seperti kartu, berlaku hingga, dan CVV (mm/yyyy) --}}
                                            <option value = "paypal">PayPal</option>
                                            <option value = "bank">Bank Transfer</option>
                                        </select>
                                    </div>
                                    <button class = "btn btn-primary btn-lg" type="submit">Confirm Payment</button>
                                </div>
                            </div>

                            <div class = "col-md-4 mb-4">
                                {{-- User's Cart --}}
                                <h4 class = "d-flex justify-content-between align-items-center mb-3">
                                    <span style = "color:black;">Your cart</span>
                                </h4>

                                <ul class = "list-group mb-3 z-depth-1">
                                    @foreach($cartProducts as $cp)
                                        <li class = "list-group-item d-flex justify-content-between lh-condensed">
                                            <div class = "card mb-3">
                                                <div class = "card-body">
                                                    <div class = "d-flex justify-content-between">
                                                        <div class = "d-flex flex-row align-items-center">
                                                            <div>
                                                                <img src = "{{ asset('assets/products/' . $cp -> image) }}" class = "img-fluid rounded-3" style = "width: 65px;">
                                                            </div>
                                                            <div class = "ms-3">
                                                                <h5>{{ $cp -> name }}</h5>
                                                            </div>
                                                        </div>

                                                        <div class = "d-flex flex-row align-items-center">
                                                            <div style = "width: 50px;">
                                                                <h5 class = "fw-normal mb-0">{{ $cp -> quantity }}</h5>
                                                            </div>

                                                            <div style = "width: 80px;">
                                                                <h5 class = "mb-0">{{ ($cp -> price) * ($cp -> quantity) }}</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class = "list-group-item d-flex justify-content-between">
                                            <span>Discount</span>
                                            <p>{{ $cp -> discount }}</p>
                                        </li>

                                        <li class = "list-group-item d-flex justify-content-between">
                                            <span>Total (Rp.)</span>
                                            <strong>{{ ($cp -> price * $cp -> quantity) + ($totalCost) - ($cp -> discount * $cp -> price) }}</strong>
                                        </li>
                                    @endforeach
                                </ul>
                    </div>
                </div>
            </div>
    </main>
@endsection

@extends('layout_format.footer')

{{-- References --}}
{{-- a. https://mdbootstrap.com/docs/standard/extended/payment-forms/ --}}
{{-- b. https://getbootstrap.com/docs/4.5/examples/checkout/ --}}
{{-- c. https://bootsnipp.com/snippets/5Mkl8 --}}
{{-- d. https://github.com/mdbootstrap/Ecommerce-Template-Bootstrap/blob/master/checkout-page.html --}}
