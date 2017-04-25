<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ShoppingCart;
class ShoppingCartProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer("*",function($view){
        //la primera vez esto da null
        $shopping_cart_id = \Session::get('shopping_cart_id');

        //primero busca un carrito y lo gaurda en la session, posterior ya busca el carro
        $shopping_cart = ShoppingCart::findOrCreateBySessionID($shopping_cart_id);
        \Session::put("shopping_cart_id", $shopping_cart->id);

        $view->with("shopping_cart", $shopping_cart);


        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
