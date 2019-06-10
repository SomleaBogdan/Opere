@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row" style="height:100px;">
        <div class="col-md-8 offset-md-2">
        <div class="card">
                <div class="card-header">Conversatie Produs: #{{$product->id}} ({{$product->nume_produs}})</div>
                <div class="card-body">
                    @isset($conversation) 
                        @if($conversation->mesaje !== null)
                            @foreach ($conversation->mesaje as $mesaj)
                            <!-- My messages -->
                            @if($mesaj->id_expeditor === Auth::id())
                            <div class="card-body">
                                <span>Mesajul Tau:</span>
                                <span class="float-right" style="color:rgba(180, 180, 180, 1)">{{$mesaj->created_at}}</span>
                                <div style="background-color: green; border-radius:5px;" class="float-right w-100 h-100">
                                    <span class="float-right text-white" style="margin:10px; margin-right:25px;">{{$mesaj->continut_mesaj}}</span>
                                </div>
                            </div>
                            @else
                            <!-- messages from others -->
                            <div class="card-body">
                                <span>Mesaj de la {{$mesaj->expeditor->nume}} {{$mesaj->expeditor->prenume}}:</span>
                                <span class="float-right" style="color:rgba(180, 180, 180, 1)">{{$mesaj->created_at}}</span>
                                <div style="background-color: rgba(240, 240, 240, 1); border-radius:5px;" class="float-left w-100 h-100">
                                    <span class="float-left" style="margin:10px; margin-right:25px;">{{$mesaj->continut_mesaj}}</span>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        @endif
                    @endisset
                </div>


                <div class="card-body">
                    <span>Mesajul tau:</span>
                    <form method="POST" action="{{ route('conversatii.store') }}">
                    @csrf
                    @isset($conversation)
                    <input id="conversation_id" name="conversation_id" type="hidden" value="{{$conversation->id}}">
                    @endisset
                    <input id="" name="titlu_mesaj" type="hidden" value="Conversatie Produs: #{{$product->id}} ({{$product->nume_produs}})">
                    <input name="id_expeditor" type="hidden" value="{{$expeditor}}">
                    <input name="id_destinatar" type="hidden" value="{{$destinatar}}">
                    <textarea name="continut_mesaj" class="form-control" id="" rows="3"></textarea>
                    <button style="margin-top:25px;" type="submit" class="btn btn-primary float-right">Trimite Mesajul</button>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection