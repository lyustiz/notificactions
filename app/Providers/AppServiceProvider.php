<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //Componente que retorna la vista de las burbuja de texto
        Blade::component('components.bubble_message', 'bubble_message');
        /*Componente que retornar la vista con los botones que mostran
          la burbuja*/
        Blade::component('components.button_message', 'button_message');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
