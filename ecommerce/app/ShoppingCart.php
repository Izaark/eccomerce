<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
	// mass assigment
    protected $fillable = ["status"];

    //this function isn't static so, don't is call from your class
    public function productsSize(){
    	return $this->id;
    }

    public static function findOrCreateBySessionID($shopping_cart_id)
    {
    	if ($shopping_cart_id)
    		return ShoppingCart::findBySession($shopping_cart_id);
    	
    	else
    		return ShoppingCart::createWhithoutSession();
    }

    	public static function findBySession($shopping_cart_id){

    		return ShoppingCart::find($shopping_cart_id);
    	}
    	public static function createWhithoutSession(){

    		return ShoppingCart::create(["status" => "incompleted"]);
    	}
    
}
