<?php

namespace App\Http\Controllers;

use App\Models\Orders;

class ShowController extends Controller
{
    public function __invoke(Orders $order)
    {

        $dateArray = explode('-', $order->date);

        $day = $dateArray[0];
        $month = $dateArray[1];
        $year = $dateArray[2];

        return view('orders-show', compact(['day', 'month', 'year', 'order']));
    }
}
