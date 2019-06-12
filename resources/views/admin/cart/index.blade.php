@extends('layouts.adminLayout')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card" style="margin-top:25px;">
                <div class="card-body">
            <table class="table-bordered table bg-white" style="margin-top:25px;">
                <thead>
                    <tr>  
                        <th> Nume Produs </th>
                        <th> Pret Produs </th>
                        <th> Actiune </th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($cart->produse as $produs)
                <tr>
                    <td>{{$produs->nume_produs}}</td>
                    <td>{{$produs->pret_produs}}</td>
                    <td>
                    {!! Form::open([
                     "method" => "delete", 
                     'class' => 'd-inline delete-form'
                     ])!!}
                     {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger'] )}}
                     {{Form::close()}}
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
                    </div>
            </div>
        </div> 
        <div clas="col-lg-4 col-md-4" style="margin-top:25px; width:100%;">
            <div class="card" style="width:100%;">
                <div class="card-body">
                    <h5>Sumar Comanda</h5>
                    <p>Total: {{$total}}.00</p>
                    <a href="{{route('contactDetails.index')}}" style="margin-top:25px;" class="btn btn-primary">Pasul Urmator</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection