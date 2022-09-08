<?php

namespace App\Http\Controllers;

use App\Models\Order_item;
use App\Http\Requests\StoreOrder_itemRequest;
use App\Http\Requests\UpdateOrder_itemRequest;

class OrderItemController extends Controller
{
    public function index()
    {
    //
        $ordersi =  Order_item::all();
        return view('admin.last', compact('ordersi'));
    }

    public function create()
    {
        //
    }

    public function store(StoreOrder_itemRequest $request)
    {
        //
    }

    public function show(Order_item $order_item)
    {
        //
    }

    public function edit(Order_item $order_item)
    {
        //
    }

    public function update(UpdateOrder_itemRequest $request, Order_item $order_item)
    {
        //
    }

    public function destroy(Order_item $order_item)
    {
        //
    }
}
