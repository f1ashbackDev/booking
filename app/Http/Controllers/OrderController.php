<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Order;
use App\Models\OrderItems;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $order = Order::where('user_id', '=', Auth::id())->with('products')->get();
        return view('user.order', [
            'order' => $order
        ]);
    }

    public function create(Services $service)
    {
       Order::create([
          'user_id' => Auth::user()->id,
           'count' => 1,
           'sum' => $service->price,
           'services_id' => $service->id
       ]);
        return redirect('/user/orders');
    }
}
