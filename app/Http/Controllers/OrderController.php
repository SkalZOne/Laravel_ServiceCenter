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
        $orders = Orders::where('user_id', $userId)->paginate(5);

        return view('orders', compact('orders'));
    }

    public function show(Orders $order)
    {
        $dateArray = explode('-', $order->date);

        $day = $dateArray[0];
        $month = $dateArray[1];
        $year = $dateArray[2];

        return view('orders-show', compact(['day', 'month', 'year', 'order']));
    }

    public function create(Request $request)
    {
        $validate = [
            'car' => $request->car,
            'date' => $request->day . '-' . $request->month . '-' . $request->year,
            'description' => $request->description,
            'time' => $request->time,
            'user_id' => auth()->id()
        ];

        Orders::create($validate);

        return redirect()->route('orders');
    }

    public function update(Request $request, $id)
    {

        $data = [
            'car' => $request->car,
            'date' => $request->day . '-' . $request->month . '-' . $request->year,
            'description' => $request->description,
            'time' => $request->time,
        ];

        $order = Orders::find($id);
        $order->update($data);

        return redirect()->route('orders');
    }
}
