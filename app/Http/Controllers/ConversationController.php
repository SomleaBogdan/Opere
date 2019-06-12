<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conversation;
use App\Announce;
use App\Message;

class ConversationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conversations = Conversation::all();
        return view('admin/conversations/index')->with('conversations', $conversations);
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
        $conversationId = $request->input('conversation_id');
        $conversation = Conversation::find($conversationId);
        if ($conversation === null) 
        {
            $conversation = new Conversation;
        }

        $conversation->titlu_mesaj = $request->input('titlu_mesaj');
        $conversation->id_expeditor = $request->input('id_expeditor');
        $conversation->id_destinatar = $request->input('id_destinatar');
        $conversation->citit = false;
        $conversation->save();

        $mesaj_nou = new Message; 
        $mesaj_nou->titlu_mesaj = $request->input('titlu_mesaj');
        $mesaj_nou->continut_mesaj = $request->input('continut_mesaj');
        $mesaj_nou->id_expeditor = $request->input('id_expeditor');
        $conversation->mesaje()->save($mesaj_nou);

        
        return redirect()->back();
        // 'titlu_mesaj','continut_mesaj', 'id_conversatie', 'id_expeditor'
        
    }

    /**        
     * $county = County::find($request->countyId);
       * $address = $this->createAddressFromRequest($request, $county);
       * $address->save();
       * $university->county()->associate($county); */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $conversation = Conversation::findOrFail($id);
        return view('admin.conversations.show')->with('conversation', $conversation);
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

    public function openOrCreateConversationWith($senderId, $recipientId, $productId) 
    {
        $conversationObj = Conversation::where('id_expeditor', $senderId)->where('id_destinatar', $recipientId)->first();
        $product = Announce::findOrFail($productId);
        return view('admin.conversations.create')->with('conversation', $conversationObj)                                        
                                                ->with('product',$product)
                                                ->with('expeditor', $senderId)
                                                ->with('destinatar', $recipientId);
        
    }
}
