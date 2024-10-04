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
}
