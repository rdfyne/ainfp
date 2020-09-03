<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use App\Application;
use App\Observers\ApplicationObserver;

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
        # model observers
        
        Application::observe(ApplicationObserver::class);

        # add datatable query to request

        $this->app->extend(Request::class, function ($service, $app) {

            # sorting
            
            $order = @$service->only('order')['order'][0];

            if ( is_array($order) ) {

                $order_column = @$service->only('columns')['columns'][$order['column']]['data'];

                $order_direction = $order['dir'];

                $service->order_column = $order_column;
                $service->order_direction = $order_direction;
            }
            else {

                $service->order_column = 'id';
                $service->order_direction = 'asc';
            }

            # pagination

            $service->per_page = @$service->only('length')['length'];

            $start = @$service->only('start')['start'];

            $service->page = ($start > 0 and $service->per_page > 0) ? $start / $service->per_page + 1 : 1;

            # search

            $service->search = @$service->only('search')['search']['value'];

            return $service;
        });
    }
}
