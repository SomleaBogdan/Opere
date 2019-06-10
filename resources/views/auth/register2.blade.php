@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Creeaza Cont') }}</div>

                <div class="card-body">
                    @if($errors->any())
                        <div class="row collapse">
                            <ul class="alert-box warning radius">
                            @foreach($errors->all() as $error)
                                <li> {{ $error }} </li>
                            @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nume</label>
                            <div class="col-md-6">
                                <input id="nume" type="text" class="form-control" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="prenume" class="col-md-4 col-form-label text-md-right">Prenume</label>
                            <div class="col-md-6">
                                <input id="prenume" type="text" class="form-control" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telefon" class="col-md-4 col-form-label text-md-right">Telefon</label>
                            <div class="col-md-6">
                                <input id="telefon" type="text" class="form-control" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="an_studiu" class="col-md-4 col-form-label text-md-right">An Studiu</label>
                            <div class="col-md-6 ">
                                <select name="an_studiu" class="form-control">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Parola</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-10">
                                <button type="submit" class="float-right">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection