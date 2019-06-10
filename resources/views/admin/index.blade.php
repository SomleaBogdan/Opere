@extends('layouts.adminlayout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4" style="margin-top:25px">
                <div class="card card-small mb-4">
                    <img class="rounded mx-auto d-block" style="margin: 25px;" src="https://via.placeholder.com/150">
                    <a class="mb-2 btn btn btn-primary mr-2 mx-auto" href="#" style=" width:170px; margin-bottom:10px;">Alege Imagine</a>
                </div>
            </div>
            
            <div class="col-lg-6" style="margin-top:25px">
                <div class="card card-small mb-4">
                    <div class="card-header border-bottom">
                        <h6 class="m-0">Detalii Cont</h6>
                    </div>
                    <div>
                        <form class="col-md-12">
                            <div class="form-group col-md-12">        
                                <label for="nume">Nume</label>
                                <input name="nume" type="text" class="form-control" placeholder="Nume" value={{Auth::user()->nume}}> 
                            </div>
                            <div class="form-group col-md-12">        
                                <label for="prenume">Prenume</label>
                                <input name="prenume" type="text" class="form-control" placeholder="Prenume" value={{Auth::user()->prenume}}> 
                            </div>
                            <div class="form-group col-md-12">        
                                <label for="email">Email</label>
                                <input name="email" type="text" class="form-control" placeholder="Email" value={{Auth::user()->email}}> 
                            </div>
                            <div class="form-group col-md-12">        
                                <label for="nr_matricol">Nr. Matricol</label>
                                <input name="nr_matricol" type="text" class="form-control" placeholder="Nr. Matricol" value={{Auth::user()->nr_matricol}}> 
                            </div>
                            <div class="form-group col-md-12">        
                                <label for="telefon">Telefon</label>
                                <input name="telefon" type="text" class="form-control" placeholder="Telefon" value={{Auth::user()->telefon}}> 
                            </div>
                            <button style="margin:25px;" type="submit" class="btn btn-accent float-right">Actualizeaza Cont</button>
                        </form>
                    </div>
                    <!-- 'nr_matricol', 'an_studiu', 'telefon' -->
                </div>
              </div>
              <div class="col-lg-1 col-md-1"></div>
            </div>
        </div>
    </div>
@endsection
