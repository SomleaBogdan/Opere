@extends('layouts.adminLayout')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <form method="POST" action="{{ route('contactDetails.store') }}">
        @csrf
                <div class="row justify-content-md-center">
                    <div class="form-group col-md-8">        
                        <label for="nume">Nume</label>
                        <input name="nume" type="text" class="form-control" placeholder="Nume" value={{$user->nume}}> 
                    </div>
                    <div class="form-group col-md-8">        
                        <label for="prenume">Prenume</label>
                        <input name="prenume" type="text" class="form-control" placeholder="Prenume" value={{$user->prenume}}> 
                    </div>
                    <div class="form-group col-md-8">         
                        <label for="telefon_mobil">Telefon Mobil</label>
                        <input name="telefon_mobil" type="text" class="form-control" placeholder="telefon mobil" value={{$user->telefon}}> 
                    </div>
                    <div class="form-group col-md-8">         
                        <label for="adresa">Adresa</label>
                        <input name="adresa" type="text" class="form-control" placeholder="Adresa"> 
                    </div>
                    <div class="form-group col-md-8">         
                        <label for="oras">Oras</label>
                        <input name="oras" type="text" class="form-control" placeholder="oras"> 
                    </div>
                    <div class="form-group col-md-8">        
                        <label for="judet">Judet</label>
                        <input name="judet" type="text" class="form-control" placeholder="judet"> 
                    </div>
                    <div class="form-group col-md-8">         
                        <label for="tara">Tara</label>
                        <input name="tara" type="text" class="form-control" placeholder="tara"> 
                    </div>
                    <div class="form-group col-md-8">         
                        <label for="cod_postal">Cod Postal</label>
                        <input name="cod_postal" type="text" class="form-control" placeholder="cod postal"> 
                    </div>
                    <div class="form-group col-md-8">    
                        <button type="submit" class="btn bg-smst-default text-white float-right">Finalizeaza Comanda</button>        
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- 'nume', 'prenume', 'telefon_mobil', 'adresa', 'oras', 'judet', 'tara', 'cod_postal' -->
@endsection