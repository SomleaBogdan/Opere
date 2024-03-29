<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Announce;
use Auth;
use App\Helpers\ImageHelper;
use Illuminate\Support\Facades\Validator;

class AnnouncesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $announces = Auth::user()->announces;
        return view('admin/announces/index')->with('announces', $announces);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/announces/create');
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
        $announce = new Announce;
        $announce->owner_id = Auth::id();
        $announce->nume_produs = $request->nume_produs;
        $announce->descriere_produs = $request->descriere_produs;
        $announce->pret_produs = $request->pret_produs; 
        $imageUrl = ImageHelper::saveImageFrom($request, 'imagine_produs','Anunturi');
        $announce->imagine_produs =  $imageUrl;
        $announce->save();
        return redirect()->back();
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
        $announce = Announce::findOrFail($id);
        $announce->delete();
        return redirect()->back();
    }
}
