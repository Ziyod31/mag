<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer('index', function($view){
            $products = Product::latest()->limit(8)->get();
            $view->with('products', $products);

            $brands = Brand::all();
            $view->with('brands', $brands);

        }); 

        view()->composer('inc.nav', function($view){
            $categories = Category::with('children')->whereNull('parent_id')->orderBy('name', 'asc')->get();            
            $view->with(compact('categories'));    
        });

      

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
