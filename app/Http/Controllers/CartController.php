<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Cart;
use App\Announce;
use App\CartProduct;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart = Auth::user()->cart;
        $total = 0;
        foreach ($cart->produse as $produs) {
            $total = $total + $produs->pret_produs;
        }

        
        return view('admin.cart.index')->with('cart', $cart)->with('total', $total);
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

        $cart = Auth::user()->cart;
        if ($cart === null) 
        {
            $cart = new Cart;
        }
        
        $cart->save();

        Auth::user()->id_cart =  $cart->id;
        Auth::user()->save();

        $productId = $request->input('product_id');
        $product = Announce::findOrFail($productId);


        $cartProduct = new CartProduct;
        $cartProduct->nume_produs = $product->nume_produs;
        $cartProduct->imagine_produs = $product->imagine_produs;
        $cartProduct->pret_produs = $product->pret_produs;
        $cartProduct->id_cart = $cart->id;
        $cartProduct->save();

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

    public function orderDone() 
    {
        $cart = Auth::user()->cart;
        return view('admin.order_done')->with('cart', $cart);
    }
}
