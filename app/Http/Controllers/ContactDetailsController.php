<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\ContactDetails;

class ContactDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = Auth::user();
        return view('admin.contactdetails.index')->with('user', $user);
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

        $contactDetails = new ContactDetails;
        // 'nume', 'prenume', 'telefon_mobil', 'adresa', 'oras', 'judet', 'tara', 'cod_postal'
        $contactDetails->nume = $request->input('nume');
        $contactDetails->prenume = $request->input('prenume');
        $contactDetails->telefon_mobil = $request->input('telefon_mobil');
        $contactDetails->adresa = $request->input('adresa');
        $contactDetails->oras = $request->input('oras');
        $contactDetails->judet = $request->input('judet');
        $contactDetails->tara = $request->input('tara');
        $contactDetails->cod_postal = $request->input('cod_postal');
        $contactDetails->save();
        $cart->id_contact = $contactDetails->id;
        $cart->save();
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
