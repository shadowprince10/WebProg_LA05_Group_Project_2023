<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentSummaryController extends Controller
{
    public function viewPaymentSummary() {
		return view('payment-summary');
	}
}
