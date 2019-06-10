@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="input-group col-md-12">
                <input style="height:35px; margin-top:5px;" class="form-control" id="searchInput" type="text" placeholder="Search..">
                <span style="margin-top:5px; height:35px;" class="input-group-append">
                    <button onclick="search();" class="btn btn-outline-secondary" id="searchBtn" type="button"> <i class="fa fa-search"></i></button>
                </span>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top:25px;">
        @foreach ($announces as $indexKey => $announce)
        <div class="col-lg-3 col-md-3" style="padding-top:25px;">
            <a href="{{route('showProduct',$announce->id)}}" class="product-card">
                <div style="height:250px; margin:10px;">
                    <img src="/images/Anunturi/{{$announce->imagine_produs}}" style="object-fit: scale-down; width:100%; height: 80%;">
                    <span>
                        <h5>{{$announce->nume_produs}}</h5>
                    </span>
                    <span style="margin-top:10px;">
                        <p>{{$announce->pret_produs}}.00 Lei </p>
                    </span>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
