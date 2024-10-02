<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class OrderController extends Controller
{
    public function index()
    {
        $userId = auth()->id();
        $orders = Orders::where('user_id', $userId)->get()->all();

        return view('orders', compact('orders'));
    }

    public function create(Request $request)
    {
        $validate = [
            'car' => $request->car,
            'date' => $request->year . '-' . $request->day . '-' . $request->month,
            'description' => $request->description,
            'time' => $request->time,
            'user_id' => auth()->id()
        ];

        Orders::create($validate);

        return redirect()->route('orders');
    }
}
