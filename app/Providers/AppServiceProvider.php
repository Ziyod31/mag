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
            $products = Product::latest()->limit(9)->get();
            $view->with('products', $products);

            $brands = Brand::all();
            $view->with('brands', $brands);

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
