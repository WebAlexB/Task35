<?php

namespace App\Http\Controllers\Admin;

use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index($orders)
    {
        $orders = Order::paginate(10);

        return view('admin/orders/index',['orders'=> $orders]);
    }
}
