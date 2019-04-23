@extends('layout.main')
@section('content')


 <header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark  bg-dark">
    <a class="navbar-brand" href="#">Notificaciones</a>
  </nav>
</header>   

<section>

 

<div class="container pt-5">

    <h1 class="display-1">Titulo</h1>
    

    <form id='formPush'>

        <div class="container">

            <div class="row">

                <div class="col">

                    <div class="form-group">
                        <label for="slt-apps">App a utilizar</label>
                        <select id="slt-apps" class="form-control" required>
                            <option value="" selected disabled >Selecciona una app</option>
                            <option value="9D5DD-F3893">CrediRutas - 9D5DD-F3893</option>
                            <option value="FFC4B-76250">TIGCA - FFC4B-76250</option>
                            <option value="9D5DD-F3893">TuLoPagas - 9D5DD-F3893</option>
                            <option value="FFC4B-76250">UbicaloAqui - FFC4B-76250</option>
                        </select>
                    </div>

                </div>

                <div class="col">
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-primary">
                            <input type="radio" class="rad_plataform" value='1' id="rad_ios"> IOS
                        </label>
                        <label class="btn btn-primary">
                            <input type="radio" class="rad_plataform" value='5' id="rad_android"> Android
                        </label>
                        <label class="btn btn-primary">
                            <input type="radio" class="rad_plataform" value='11,12,13' id="rad_web"> Web
                        </label>
                        <label class="btn btn-primary">
                            <input type="radio" class="rad_plataform" value='sms' id="rad_sms"> SMS
                        </label>
                    </div>

                </div>

            </div>

        </div>

        <div class="row">
            <div class="col">

                <div class="form-check">
                    
                    <div class="form-check">
                        <input id="chk_option_3_days" value='#Last Application Open(on 3 days ago)' class="form-check-input chk-optiions" type="checkbox">
                        <label for="chk_option_3_days" class="form-check-label">Dind’t open the app for 3 days:</label>
                    </div>
    
                    <div class="form-check">
                        <input id="chk_option_7_days" value='#Last Application Open(on 7 days ago)' class="form-check-input chk-optiions" type="checkbox">
                        <label for="chk_option_7_days" class="form-check-label">Didn't open the app for 7 days:</label>
                    </div>

                </div>

            </div>
            <div class="col">
                <div class="form-check">
                    <input id="chk_option_new_user" value='#First Install(exactly or less 1 days ago)' class="form-check-input chk-optiions" type="checkbox">
                    <label for="chk_option_new_user" class="form-check-label">New users in the app:</label>
                </div>

                <div class="form-check">
                    <input id="chk_option_purchased" value='#In-app Purchase(≠0)' class="form-check-input chk-optiions" type="checkbox">
                    <label for="chk_option_purchased" class="form-check-label">Purchased something:</label>
                </div>
            </div>
        </div>  
        
        <div class="row">

            <div class="col">
                <div class="form-group">
                    <label for="txa_msj_push">Mensaje Push</label>
                    <textarea id="txa_msj_push" class="form-control" rows="3" required maxlength="160" minlength="5"></textarea>
                </div>
            </div>

            <div class="col">
                <div class="mt-2">
                <button class="btn btn-block btn-info" type="button" id="btn-schedule">Agendar Mensaje</button>
                <button class="btn btn-block btn-success" type="button" id="btn-send">Enviar Ahora</button>
                <button class="btn btn-block btn-danger" type="reset" id="btn-reset">Limpiar</button>
                </div>
            </div>
        </div>   


    </form>


</section>


@endsection