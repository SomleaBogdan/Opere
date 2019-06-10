@extends('layouts.adminlayout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <table class="table-bordered table bg-white" style="margin-top:25px;">
            <thead>
                <tr>  
                    <th> Nume Expeditor </th>
                    <th> Titlu Conversatie </th>
                    <th> Actiune </th>
                </tr>
            </thead>
            <tbody id="">
            @foreach ($conversations as $conversation)
                <tr>
                    <td>
                    {{$conversation->expeditor->nume}} {{$conversation->expeditor->prenume}}
                    </td>
                    <td><a href="{{route('conversatii.show', $conversation->id)}}">{{$conversation->titlu_mesaj}}</a></td>
                    <td>
                    <a class="btn btn-info text-white" href="{{route('conversatii.show', $conversation->id)}}"> <i class="fa fa-comment-o"></i></a>
                    {!! Form::open([
                     "method" => "delete",
                     "route" => ['conversatii.destroy', $conversation->id], 
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
