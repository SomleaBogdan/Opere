@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="height:100px;">
        <div class="col-lg-8 col-md-8">
            <div class="card">
                <div class="card-body" style="text-align: center;">
                    <img class="product-image" src="/images/Anunturi/{{$announce->imagine_produs}}">
                </div>
            </div>
            <div class="card" style="margin-top:25px;">
                <div class="card-body">
                    <span><h3>{{$announce->nume_produs}}</h3></span>
                    <span><p>{{$announce->descriere_produs}}</p></span>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-body" style="text-align: center;">
                            <span><h4>Pret: {{$announce->pret_produs}}.00</h4></span>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-12" style="margin-top:25px;">
                    <div class="card">
                        <div class="card-body">
                            <div style="text-align: center;">
                                <img src="https://via.placeholder.com/100" style="border-radius: 50%;">
                                <h5 style="margin-top:10px;">{{$announce->owner->nume}} {{$announce->owner->prenume}}</h5>
                                <a class="btn btn-primary" href="{{route('openConversation', ['id1'=>Auth::user()->id,'id2'=>$announce->owner->id, 'id3'=>$announce->id])}}">Trimite Mesaj</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-12" style="margin-top:25px;">
                    <div class="card">
                        <div class="card-body">
                            <div style="text-align: center;">
                                <a class="btn btn-success" href="#">Propune Oferta</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
