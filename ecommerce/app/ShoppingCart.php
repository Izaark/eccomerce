<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    // mass assigment
    protected $fillable = ["status"];

    public function inShoppingCart(){
        return $this->hasMany("App\InShoppingCart");
    }
    public function products(){
        return $this->belongsToMany("App\Product","in_shopping_carts");    
    }
    
    //this function isn't static so, do call from your class
    public function productsSize(){
        return $this->products()->count();
    }

    public static function findOrCreateBySessionID($shopping_cart_id)
    {
        if ($shopping_cart_id)
            //Busca el carrito con este id
            return ShoppingCart::findBySession($shopping_cart_id);
        
        else
            // la primera vez que entre da else, ya que es null
            return ShoppingCart::createWhithoutSession();
    }

        public static function findBySession($shopping_cart_id){

            return ShoppingCart::find($shopping_cart_id);
        }
        public static function createWhithoutSession(){

            return ShoppingCart::create(["status" => "incompleted"]);
        }
    
}
