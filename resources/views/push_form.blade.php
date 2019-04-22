@extends('layout.main')
@section('content')

<section>

 

<div class="container">
        <h1 class="display-1">Titulo</h1>

    {{-- input:valid, textarea:valid {
        background:green;
      }
      input:invalid, textarea:invalid {
        background:red;
      } --}}


       

        <form action="" onsubmit="this.prevent.default">

            <div class="container">

                <div class="row">

                    <div class="col">

                        <div class="form-group">
                            <label for="my-input">App a utilizar</label>
                            <select id="my-input" class="form-control" required>
                                <option selected disabled>Selecciona una app</option>
                                <option value="1234-5678-90">CrediRutas - 1234-5678-90</option>
                                <option value="1234-5678-90">TIGCA - 1234-5678-90</option>
                                <option value="1234-5678-90">TuLoPagas - 1234-5678-90</option>
                                <option value="1234-5678-90">UbicaloAqui - 1234-5678-90</option>
                            </select>
                        </div>

                    </div>

                    <div class="col">

                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-primary">
                                    <input type="radio"> IOS
                                </label>
                                <label class="btn btn-primary">
                                    <input type="radio"> Android
                                </label>
                                <label class="btn btn-primary">
                                    <input type="radio"> Web
                                </label>
                                <label class="btn btn-primary">
                                    <input type="radio"> SMS
                                </label>
                            </div>
    
                        </div>

                </div>

            </div>

            <div class="row">
                <div class="col">

                    <div class="form-check">
                        
                        <div class="form-check">
                                <input id="my-input" class="form-check-input" type="checkbox">
                            <label for="my-input" class="form-check-label">Dind’t open the app for 3 days:</label>
                        </div>
        
                        <div class="form-check">
                                <input id="my-input" class="form-check-input" type="checkbox">
                                <label for="my-input" class="form-check-label">Purchased something:</label>
                        </div>

                    </div>

                </div>
                <div class="col">
                    <div class="form-check">
                        <input id="my-input" class="form-check-input" type="checkbox">
                        <label for="my-input" class="form-check-label">Dind’t open the app for 3 days:</label>
                    </div>

                    <div class="form-check">
                        <input id="my-input" class="form-check-input" type="checkbox">
                        <label for="my-input" class="form-check-label">Purchased something:</label>
                    </div>
                </div>
            </div>  
            
            <div class="row">

                <div class="col">
                    <div class="form-group">
                        <label for="my-input">Mensaje Push</label>
                        <textarea id="my-input" class="form-control" rows="3" required maxlength="160" minlength="5"></textarea>
                    </div>
                </div>

                <div class="col">
                    <div class="mt-2">
                    <button class="btn btn-block btn-danger " type="button">Agendar Mensaje</button>
                    <button class="btn btn-block btn-success" type="submit">Enviar Ahora</button>
                    </div>
                </div>
            </div>   


        </form>


</section>
     
     
@endsection