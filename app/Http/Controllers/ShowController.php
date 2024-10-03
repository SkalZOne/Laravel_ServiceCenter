<?php

namespace App\Http\Controllers;

use App\Models\Orders;

class ShowController extends Controller
{
    public function __invoke(Orders $order)
    {
        return view('orders-show');
    }
}
