@extends('layout.main')
@section('content')


     <!-- Header -->
     <header data-role="header" id="header">

          <!-- Nav -->
          @include('layout.navigation')
               
     </header>


     <!-- home -->
     @include('pages.landing.home')

     <!-- Social Network Bar -->
     @include('layout.rrss')

    <!-- Boton flotante -->
    @include('components.floating_button')


     <div class="sections-holder">     
          
          <!-- que-es -->
          @include('pages.landing.what_is')

          <!-- como funciona -->
          @include('pages.landing.how_work') 
          
          <!-- dirigido --> 
          @include('pages.landing.addressed_to') 

     </div>

     <!-- footer --> 
     @include('layout.footer')

     
@endsection