<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $user = User::where('login', 'newfit')->get()->first();

        $orders = Orders::paginate(10);

        return view('admin/index', compact(['user', 'orders']));
    }

    public function order(Orders $order)
    {
        $user = User::where('login', 'newfit')->get()->first();

        $dateArray = explode('-', $order->date);

        $day = $dateArray[0];
        $month = $dateArray[1];
        $year = $dateArray[2];

        return view('admin/order-redact', compact(['day', 'month', 'year', 'order', 'user']));
    }
}
