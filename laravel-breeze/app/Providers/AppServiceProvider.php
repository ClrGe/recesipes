<?php

namespace App\Providers;

use App\Models\Users\Role;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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
        Blade::if('admin', function () {    
            if(auth()->user()){
                $role = Role::where("id", auth()->user()->role_id)->first();
                if($role->title == "Administrator")
                {
                    return 1;
                }
            }    
            return 0;
        });
    }
}
