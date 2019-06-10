@extends('layouts.adminlayout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12" style="margin-top:50px;">
            <div class="card">
            <div class="card-header"><h6>Adauga Anunt</h6></div>
                <div class="card-body">
                    <form method="POST" action="{{ route('anunturi.store') }}" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group row">
                            <label for="nume_produs" class="col-md-2 col-form-label">Titlu Anunt</label>
                            <div class="col-md-8">
                                <input id="nume_produs" type="text" class="form-control" name="nume_produs" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="imagine_produs" class="col-md-2 col-form-label">Imagine</label>
                            <div class="col-md-8">
                                <input type="file" id="file" name="imagine_produs">
                            </div>
                            
                        </div>
                        <div class="form-group row">
                            <label for="descriere_produs" class="col-md-2 col-form-label">Descriere Produs</label>
                            <div class="col-md-8">
                                <textarea name="descriere_produs" class="form-control" id="" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pret_produs" class="col-md-2 col-form-label">Pret</label>
                            <div class="col-md-8">
                                <input id="pret_produs" type="text" class="form-control" name="pret_produs" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-10">
                                <button type="submit" class="btn bg-smst-default text-white float-right">Adauga Anuntul</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
