<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use App\Address;

class OrderController extends Controller
{
    public function index() {
        $data = array (
            'orders' => Order::orderBy('number')->get(),
            'addresses' => Address::get()
        );

        return view('dashboard/orders', $data);
    }

    public function show(Order $order) {
        echo "fffff";
        dd($reqest);
    }
}
