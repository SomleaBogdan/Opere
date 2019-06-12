@extends('layouts.adminlayout')

@section('content')
<div class="container">
    <div class="row" >
        <div class="col-md-12" style="text-align: center; margin-top:25px;">
            <h2>Comanda Finalizata</h2>
            <span>
                <p>
                    Comanda dumneavoastra cu numarul: #{{$cart->id}} a fost finalizata cu success. <br/>
                    Veti fi contact pentru detalii.
                </p>
            </span>
        </div>
    </div>
</div>
@endsection
