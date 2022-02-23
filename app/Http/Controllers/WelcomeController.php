<?php

namespace App\Http\Controllers;
use App\Project;
use Auth;
use App\Donar;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
 

public function index(){

$feproducts=Project::orderby('id','desc')->get();
 return view('frontend.home.home',compact('feproducts'));

}

public function about(){

 return view('frontend.pages.about');
	
}

public function contact(){

 return view('frontend.pages.contact');
	
}





public function cart(){

$cartitem=cart::content();
return view('frontend.pages.cart',compact('cartitem'));
}


public function cartremove($id){

Cart::remove($id);
return redirect('/cart');
}

public function cartupdate(Request $request){

Cart::update($request->id,$request->qty );
return redirect('/cart');
}

public function checkout()
{
	if (Auth::check()) {
		if (Auth::user()->type=="user") {
			return view('frontend.pages.payment');
		}
		
	}else{
		return redirect('/login');
	}
}


public function payment_confirm(Request $request)
{

$hashSecretWord = 'tvirus'; //2Checkout Secret Word
$hashSid = 901413330; //2Checkout account number
$hashTotal = $request->total; //Sale total to validate against
$hashOrder = $request->order_number; //2Checkout Order Number
$StringToHash = strtoupper(md5($hashSecretWord . $hashSid . $hashOrder . $hashTotal));
if ($StringToHash != $_REQUEST['key']) {
 return $result = 'Fail - Hash Mismatch';
} else {

foreach (cart::content() as $item) {
	$donaritem=new Donar();
	$donaritem->uid=Auth::user()->id;
	$donaritem->pid= $item->id;
	$donaritem->qty= $item->qty;
	$donaritem->total= $item->total;
    $donaritem->save();

    Cart::destroy();
}


 return $result = 'Success - Hash Matched';
}


	
}



public function search(Request $request){


$search=Project::where('name','like','%'.$request->search.'%')->orwhere('code','like','%'.$request->search.'%')->get();


return view('frontend.pages.search',compact('search'));


}


public function causes(){

 return view('frontend.pages.causes');
	
}
public function donate(){

 return view('frontend.pages.donate');
	
}
public function elements(){

 return view('frontend.pages.elements');
	
}
public function news(){

 return view('frontend.pages.news');
	
}
public function portfolio(){

 return view('frontend.pages.portfolio');
	
}
public function single_causes(){

 return view('frontend.pages.single-causes');
	
}
public function volunteer(){

 return view('frontend.pages.volunteer');
	
}
public function payment(){

 return view('frontend.pages.payment');
	
}
public function details(){

 return view('frontend.pages.details');
	
}


}
