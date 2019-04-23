@extends('layout.main')
@section('content')


 <header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark  bg-dark">
    <a class="navbar-brand" href="#">Notificaciones</a>
  </nav>
</header>   

<section class="bg-light vh-100">

 <div class="container">

        <div aria-live="polite" aria-atomic="true">
                <div class="toast" style="position: absolute; top: 10; right:0;" id="mensaje" role="alert" aria-live="assertive" aria-atomic="true"  data-delay="2000">
            
                  <div class="toast-body text-white font-weight-bold">   
                    Mensaje
                  </div>
                </div>
            </div>

    <h1 class="display-4">Envio de Notificaciones</h1>
    

    <form id='formPush' class="bg-white p-3">

        <div class="container-fluid">

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
                            <input type="checkbox" class="chk_plataform" value='1' id="chk_ios"> IOS
                        </label>
                        <label class="btn btn-primary">
                            <input type="checkbox" class="chk_plataform" value='5' id="chk_android"> Android
                        </label>
                        <label class="btn btn-primary">
                            <input type="checkbox" class="chk_plataform" value='11,12,13' id="chk_web"> Web
                        </label>
                        <label class="btn btn-primary">
                            <input type="checkbox" class="chk_plataform" value='0' id="chk_sms"> SMS
                        </label>
                    </div>

                </div>

            </div>

        </div>

        <div class="row">
            <div class="col">

                <div class="form-check">
                    
                    <div class="form-check">
                        <input id="chk_option_3_days" value='Dind’t open the app for 3 days' class="form-check-input chk-filters" type="checkbox">
                        <label for="chk_option_3_days" class="form-check-label">Dind’t open the app for 3 days:</label>
                    </div>
    
                    <div class="form-check">
                        <input id="chk_option_7_days" value="Didn't open the app for 7 days" class="form-check-input chk-filters" type="checkbox">
                        <label for="chk_option_7_days" class="form-check-label">Didn't open the app for 7 days:</label>
                    </div>

                </div>

            </div>
            <div class="col">
                <div class="form-check">
                    <input id="chk_option_new_user" value='New users in the app' class="form-check-input chk-filters" type="checkbox">
                    <label for="chk_option_new_user" class="form-check-label">New users in the app:</label>
                </div>

                <div class="form-check">
                    <input id="chk_option_purchased" value='Purchased something' class="form-check-input chk-filters" type="checkbox">
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
                <div class="mt-5">
                
                <button class="btn btn-block btn-success" type="button" id="btn-send">
                    <div class="loading spinner-border spinner-border-sm text-light d-none" role="status">
                        <span class="sr-only">Loading...</span>
                      </div> 
                      Enviar Ahora
                    </button>
                <button class="btn btn-block btn-danger" type="reset" id="btn-reset">Limpiar</button>
                </div>
            </div>
        </div>   

        <div class="accordion" id="schedule-container">
            <div class="card bg-info text-white">
                <div class="card-header" id="headingOne">
                    <button class="btn btn-block btn-outline-light" type="button" id="btn-schedule" data-toggle="collapse" data-target="#schedule" aria-expanded="true" aria-controls="schedule">
                        Agendar Mensaje
                    </button>
                </div>
            
                <div id="schedule" class="collapse" aria-labelledby="headingOne" data-parent="#schedule-container">
                <div class="card-body">

                        <div class="form-group row justify-content-center">
                            <label for="schedule-date" class="col-sm-2 col-form-label">Fecha</label>
                            <div class="col-sm-3">
                                <input id="schedule-date" type="date" class="form-control" >
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <label for="schedule-time" class="col-sm-2 col-form-label">Hora</label>
                            <div class="col-sm-3">
                                <input id="schedule-time" type="time" class="form-control">
                            </div>
                        </div>
                </div>
                </div>
            </div>

        </div>

    </form>

    
</section>




@endsection