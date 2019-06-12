@extends('layouts.adminlayout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4" style="margin-top:25px">
                <div class="card card-small mb-4">
                    <img id="userImage" class="rounded mx-auto d-block" style="margin: 25px; width:150px; height:150px;" src="https://via.placeholder.com/150">
                    <!-- Form pentru imagine -->
                    <form id="image-form" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input name="img_usr" id="file" style="display:none" type="file"/>
                    </form>
                    <a  id="upload_link" class="mb-2 btn btn btn-primary mr-2 mx-auto" href="" style=" width:170px; margin-bottom:10px;">Alege Imagine</a>
                </div>
            </div>
            
            <div class="col-lg-6" style="margin-top:25px">
                <div class="card card-small mb-4">
                    <div class="card-header border-bottom">
                        <h6 class="m-0">Detalii Cont</h6>
                    </div>
                    <div>
                        <form method="POST" action="{{route('user.update', ['id'=>Auth::id()])}}" class="col-md-12">
                        <input type="hidden" name="_method" value="PUT">

                        @csrf
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
    <script>
        $(function(){
            $("#upload_link").on('click touchstart', function(e) {
                e.preventDefault();
                $("#file:hidden").trigger('click');
                $(this).val('');
            });



            $("#file").change(function(e) {
                console.log(e);
                var tgt = e.target || window.event.srcElement,
                files = tgt.files;

                // FileReader support
                if (FileReader && files && files.length) {
                    var fr = new FileReader();
                    fr.onload = function () {
                        document.getElementById('userImage').src = fr.result;
                        performUpload();
                    }
                    fr.readAsDataURL(files[0]);
                }
                // Not supported
                else {
                    // fallback -- perhaps submit the input to an iframe and temporarily store
                    // them on the server until the user's session ends.
                }
            });
        });

        function performUpload() 
        {
            var url = "admin/setuserimage";
            var fd = new FormData();
            var files = $('#file')[0].files[0];
            fd.append('file',files);
            $.ajax({
                type: 'POST',
                url: url,
                processData: false,  // Important!
                contentType: false,
                cache: false,
                data: fd,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data)
                {
                    console.log(data);
                },
                
                error: function(data) 
                { 
                    console.log(data);
                }  
            });
        }

        
    </script>
@endsection
