<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Event;
use App\Events\ThingWasDone;
use App\Events\SmsNotification;
use App\User;
class AddProductController extends Controller
{
    function create(){

	    
		$condition = new \Darryldecode\Cart\CartCondition(array(
		    'name' => 'VAT 12.5%',
		    'type' => 'tax',
		    'target' => 'item',
		    'value' => '-15'
		   
		));
		\Cart::clear();
	   
	    \Cart::add(array(
	    'id' => 1,
	    'name' => 'Sample Item',
	    'price' => 25,
	    'quantity' => 4,
	    	'conditions' =>$condition
		));
			print_r(\Cart::getTotal());
	    echo '<br>';
	echo 'Total is ' .\Cart::getContent().  ' Sub Total is '.	\Cart::getSubTotal(); ;			
  	exit();
	    /*\Cart::add(array(
	    'id' => 2,
	    'name' => 'Sample Item3',
	    'price' => 25,
	    'quantity' => 4,
	    'conditions' =>$condition
		));
		
		\Cart::add(array(
	    'id' => 2,
	    'name' => 'Sample Item3',
	    'price' => 25,
	    'quantity' => 4,
	    'conditions' =>$condition
		));
		*/

        
	       //echo '<pre>';print_r(\Cart::getContent());
	       $user= User::find(1);
	       //new ThingWasDone($user);
	       Event::fire(new ThingWasDone($user));
	       //Event::fire(new SmsNotification($user));
	        exit();
	      //$s=  new SmsNotification($user);
	    //  //exit(\Cart::getTotal() .'sub ' .\Cart::getSubTotal() );
	  	  //return view('product/product');
    }

    function showRecords(){
    	$data=array('id'=>'1','message'=>'this is my message');
    	echo json_encode($data);
    }

    function testme($p){
    	$all=explode('/',$p);
    	print_r($all);
    	exit("yes came in contorller ");
    }
}
