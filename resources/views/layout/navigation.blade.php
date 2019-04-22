
        <nav class=" navigation navbar navbar-dark p-0">
       
                <div class="m-2">

                    <button class="navbar-toggler nav-button m-1 p-1" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="page-menu" aria-expanded="true" aria-label="Toggle Menu">
                        <i class="tlp-icon-menu tlp-icon-md"></i> 
                    </button>
                                
                    <a class="logo-principal float-right" href="{{ route('home') }}" aria-label="TULOPAGAS Home">
                        <img src="{!! asset('./img/logo-white-magenta.png')!!}" alt="">
                    </a>
                </div>
        
                <form class="form-inline login-form d-none d-md-block float-right">
        
                    <button class="btn-session btn btn-sm btn-outline-light ">Iniciar Session</button>
                    
                    <button class="btn-register btn btn-sm shadow">Registro</button>
        
                </form>
              
                <div class="navbar-collapse collapse navbar-show" id="main-menu">
        
                    <div class="container-fluid menu-item-container h-100 pt-2 px-0 ">
        
                    <div class="row h-100 no-gutters">
                       
                        <div class="col-md-3">
        
                            <a href="{{ route('home') }}/#what-is" aria-label="¿Qué es TÚLOPAGAS?" class="d-block h-50 menu-what-is">
                                <div class="menu-item h-100 w-100 d-flex align-items-end">
                                    <h3 class="menu-item-title p-2">Qué es <span class="text-logo-white"><strong>TÚ</strong>LO<strong>PAGAS</strong></span>?</h3>
                                </div>
                            </a>
        
                            <a href="{{ route('home') }}/#how-work" aria-label="¿Cómo Funciona?" class="d-block h-50 menu-how-work">
                                <div class="menu-item h-100 w-100 d-flex align-items-end">
                                    <h3 class="menu-item-title p-2">Cómo Funciona <span class="text-logo-white"><strong>TÚ</strong>LO<strong>PAGAS</strong></span>?</h3>
                                </div>
                            </a>
        
                        </div>
        
                        <div class="col-md-6">
                            
                            <div class="h-50">
        
                                <div class="container-fluid h-100 p-0 ">
        
                                    <div class="row h-100 no-gutters">

                                        <a href="{{ route('benefits_commerce') }}" aria-label="Beneficios - Comercios" class="d-block col-sm-6 menu-addressed-to-commerce">
                                            <div class="menu-item h-100 w-100 d-flex align-items-end">
                                                <h3 class="menu-item-title p-2">Comercio</h3>
                                            </div>
                                        </a>

                                        <a href="{{ route('benefits_consumer') }}" aria-label="Beneficios - Consumidor" class="d-block col-sm-6 menu-addressed-to-consumer">
                                            <div class="menu-item h-100 w-100 d-flex align-items-end">
                                                <h3 class="menu-item-title p-2">Consumidor</h3>
                                            </div>
                                        </a>

                                    </div>
        
                                </div>
        
                            </div>
        
                            <a href="{{ route('commercial_allies') }}" aria-label="Aliados Comerciales" class="d-block h-50 menu-commercial-allies">
        
                                <div class="menu-item h-100 w-100 d-flex align-items-end">
                                    <h3 class="menu-item-title p-2"><strong>Aliados</strong> comerciales</h3>
                                </div>
        
                            </a>
        
                        </div>
        
                        <div class="col-md-3">
        
                            <div class="h-75 menu-app-download">
        
                                <div class="menu-item h-100 w-100 d-flex align-items-lg-end">
                                    
                                    <div class="container-fluid">
        
                                        <div class="row">
                                            <h3 class="col-12 menu-item-title">
                                                Descarga la App <strong>totalmente Gratis</strong>
                                            </h3>
                                        </div>
        
                                        <div class="row justify-content-center p-2">
                                            
                                            <div class="google-btn">
                                                <a href="https://play.google.com/store" class='btn btn-sm tp-btn' target="_blank" rel="noopener noreferrer" aria-label="Google Play">
                                                    <img src="{!! asset('./img/google_play.png')!!}" class='img-fluid' alt="Google Play">
                                                </a>
                                            </div>
        
                                            <div class="apple-btn">
                                                <a href="https://www.apple.com/la/ios/app-store/" class='btn btn-sm tp-btn' target="_blank" rel="noopener noreferrer" aria-label="App Store">
                                                    <img src="{!! asset('./img/app_store.png')!!}" class='img-fluid' alt="App Store">
                                                </a>
                                            </div>

                                        </div>
        
                                    </div>
        
                                </div>
        
                            </div>
        
                            <div class="h-25 menu-follow-us">
                                
                                <div class="h-100 w-100">
        
                                    <div class="container-fluid">
        
                                        <div class="row align-items-center">
        
                                            <h3 class="col-7 menu-follow-us-title">Siguenos</h3>
                                            <p class="col-5 menu-follow-us-sub-title">En Nuestras Redes Sociales</p>
                                            
                                        </div>
        
                                        <div class="row justify-content-center">
        
                                            <div class="col-3 text-center">
                                                <a href="http://www.instagram.com/" target="_blank" rel="noopener noreferrer" aria-label="Instagram" class="icon icon-instagram text-white">
                                                    <i class="tlp-icon-instagram tlp-icon-2x" aria-hidden="true"></i>
                                                </a> 
                                            </div>
        
                                            <div class="col-3 text-center">
                                                <a href="http://www.twitter.com/" target="_blank" rel="noopener noreferrer" aria-label="Twitter" class="icon icon-twitter text-white">
                                                    <i class="tlp-icon-twitter tlp-icon-2x" aria-hidden="true"></i>
                                               </a>
                                            </div>
        
                                            <div class="col-3 text-center">
                                                <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer" aria-label="Facebook" class="icon icon-facebook text-white">
                                                    <i class="tlp-icon-facebook tlp-icon-2x" aria-hidden="true"></i>
                                               </a>
                                            </div>
        
                                        </div>
                                    
                                    </div>
        
                                </div>
                            </div>
                        </div>
                    </div>
                        
                    </div>
        
        
                </div>
        
        
              </nav>

