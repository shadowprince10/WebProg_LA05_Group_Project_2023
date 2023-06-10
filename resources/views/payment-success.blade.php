@extends('layout_format.header')

@section('container')
    <section class = "h-100 h-custom" style = "background-color:skyblue;">
        <div class = "container py-5 h-100">
            <div class = "alert alert-success" role = "alert">
                Payment successful! Thanks for purchasing.
            </div>
            <div class = "row d-flex justify-content center align-items-center h-100">
                <div class = "col lg-8 col-xl-6">
                    <div class = "card-body p-5">
                        <p class = "lead fw-bold mb-5" style = "color:darkblue;">Payment Summary</p>

                        <div class = "row">
                            <div class = "col mb-3">
                                <p class = "small text-muted mb-1">Date</p>
                                {{-- how to get current purchase/order details? --}}
                                <p>{{ $order -> transaction -> date}}</p>
                            </div>

                            <div class = "col mb-3">
                                <p class = "small text-muted mb-1">Order ID</p>
                                <p>{{ $order -> orderID }}</p>
                            </div>
                        </div>

                        <div class = "mx-n5 px-5 py-4" style = "background-color:gray;">
                            <div class = "row">
                                <div class = "col-md-4 col-lg-9">
                                    <p>{{ $order -> product -> name }}</p>
                                </div>

                                <div class = "col-md-4 col-lg-3">
                                    <p>{{ $order -> product -> price }}</p>
                                </div>
                            </div>

                            <div class = "row">
                                <div class = "col-md-4 col-lg-9">
                                    <p><b>Shipping Cost</b></p>
                                </div>

                                <div class = "col-md-4 col-lg-3">
                                    <p>{{ $order -> shipping -> cost }}</p>
                                </div>
                            </div>

                            <div class = "row">
                                <div class = "col-md-4 col-lg-9">
                                    <p>Total</p>
                                </div>

                                <div class = "col-md-4 col-lg-3">
                                    <p>{{ {{ ($order -> product -> quantity * $order -> product -> price) + ($order -> shipping -> cost) - ($order -> product -> discount * $order -> product -> price) }} }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection

@extends('layout_format.footer')

{{-- References --}}
{{-- a. https://mdbootstrap.com/docs/standard/extended/order-details/ --}}
{{-- b. https://getbootstrap.com/docs/5.2/components/alerts/ --}}
