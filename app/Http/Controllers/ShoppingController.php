<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ShoppingController extends Controller
{

    public function payment()
    {
        $order = Order::all();
        return view('order.payment', compact('order'));
    }


    public function productCart(Request $request)
    {
        $request->validate([
            'id_user'    => 'required',
            'id_product' => 'required',
            'name'       => 'required',
            'image'      => 'required',
            'quantity'   => 'required',
            'price'   => 'required',
        ],
        [
            'quantity.required'   => 'El campo cantidad es obligatoria',
        ]);

        $sale = new Order;

        $sale->user_id=$request->id_user;
        $sale->product_id=$request->id_product;
        $sale->name=$request->name;
        $sale->image=$request->image;
        $sale->image=$request->image;
        $sale->quantity=$request->quantity;
        $sale->total=$request->quantity*$request->price;
        $sale->state='1';

        $sale->save();

        return redirect('/cart');
    }

    public function cart()
    {
        $user = Auth::user();
        $id = Auth::id();
        $order = Order::select('orders.*')->where('user_id', '=', $id )->get();
        return view('order.cart', compact('order'));
    }

    public function confirmation()
    {
        $order = Order::all();
        return view('order.confirmation', compact('order'));
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
