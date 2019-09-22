<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donar;


class DonarController extends Controller
{
    
public function donar(){

$alldatas=Donar::where('status',false)->get();
return view('admin.donar.donar-list',compact('alldatas'));

}

public function completed(){

$alldatas=Donar::where('status',true)->get();
return view('admin.donar.donar-completed-list',compact('alldatas'));

}


public function confirm($id){

$alldatas=Donar::where('id',$id)->first();
$alldatas->status=true;
$alldatas->save();

return redirect('/donar-list');

}

public function donar_delete($id){

$alldatas=Donar::where('id',$id)->first();
$alldatas->delete();

return redirect('/completed-donar');

}


}
