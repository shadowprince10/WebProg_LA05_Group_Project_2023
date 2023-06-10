<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function viewOrder($orderID) {
        $order = Order::find($orderID);

        return view('order', compact('order'), ['title' => 'Order']);
    }

    public function viewPurchaseSuccess($orderID) {
        $order = Order::find($orderID);

        return view('order', compact('order'));
    }
}
