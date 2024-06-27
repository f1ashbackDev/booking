<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItems;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('new_admin.orders',[
            'orders' => Order::all()
        ]);
    }

    public function show(Order $order)
    {
       return view('new_admin.order-show', [
           'order' => $order
       ]);
    }

    public function update(Request $request, Order $order)
    {
        $order->update($request->all());
        return redirect('/admin/orders');
    }
}
