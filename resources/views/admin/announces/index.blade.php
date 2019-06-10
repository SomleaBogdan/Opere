@extends('layouts.adminlayout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
        <a class="btn bg-smst-default text-white" href="anunturi/create" style="margin-left:10px; margin-top:5px;">Adauga Anunt</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <table class="table-bordered table bg-white" style="margin-top:25px;">
            <thead>
                <tr>  
                    <th style="width:100px;"> </th>
                    <th> Nume Anunt </th>
                    <th> Pret </th>
                    <th> Actiune </th>
                </tr>
            </thead>
            <tbody id="">
            @foreach ($announces as $announce)
                <tr>
                    <td>
                        <img src="/images/Anunturi/{{$announce->imagine_produs}}" width="50px" height="50px">
                    </td>
                    <td>{{$announce->nume_produs}}</td>
                    <td>{{$announce->pret_produs}}</td>
                    <td>
                    {!! Form::open([
                     "method" => "delete",
                     "route" => ['anunturi.destroy', $announce->id], 
                     'class' => 'd-inline delete-form'
                     ])!!}
                     {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger'] )}}
                     {{Form::close()}}
                    </td>
                </tr>
            @endforeach    
            </tbody>
        </div>
    </div>
</div>
@endsection
