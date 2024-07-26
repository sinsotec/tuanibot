<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Event;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;
use App\Models\Cuestionario;
use App\Models\Category;

class AppServiceProvider extends ServiceProvider
{
    
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        

        Event::listen(BuildingMenu::class, function (BuildingMenu $event) {
             $event->menu->add(
                [ 
                    'key'         => 'Categories',
                    'text'        => 'Categorias',
                    'url'         => 'categories',
                    'icon'        => 'far fa-fw fa-clipboard',
                    'label'       => Category::count(),
                    'label_color' => 'success',
                ],
                [ 
                'key'         => 'Questionaries',
                'text'        => 'Questionaries',
                'url'         => 'cuestionarios',
                'icon'        => 'far fa-fw fa-clipboard',
                'label'       => Cuestionario::count(),
                'label_color' => 'success',
                ]
            ); 
        });
    }
}
