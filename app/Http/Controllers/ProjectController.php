<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;
use App\Image;



class ProjectController extends Controller
{
    
public function index(){


$alldatas=Project::orderby('id','desc')->get();

return view('admin.project.project-list',compact('alldatas'));	
}

public function add_project(){
return view('admin.project.add-project');	

}

public function save_project(Request $request){
request()->validate([

'name'=>'required|string',



]);


$save_project=new Project();

 $save_project->name= $request->name;  
 $save_project->code= $request->code;  
 $save_project->category= $request->category;  
 $save_project->cname= $request->cname;    
 $save_project->reason= $request->reason;  
 $save_project->condition= $request->condition;  
$imge=$request->file('thum_img');
  $img_name=$imge->getClientOriginalName();
  $imge->move('./upload',$img_name);
 $save_project->thum_img=$img_name; 
 $save_project->details= $request->details;   
$save_project->save();


foreach ($request->file('image') as  $proimages) {

 $proimag = new Image();
$proimg_name=$proimages->getClientOriginalName();
$proimages->move('./proupload',$proimg_name);

$proimag->image=$proimg_name;
$proimag->pid=$save_project->id;
$proimag->save();
}


return back()->with('success','Data Save Successfully');


}



public function update_project(Request $request){
request()->validate([

'name'=>'required|string',

]);


$save_project=Project::where('id',$request->id)->first();;

 $save_project->name= $request->name;  
 $save_project->code= $request->code;  
 $save_project->category= $request->category;  
 $save_project->cname= $request->cname;   
 $save_project->reason= $request->reason;  
 $save_project->condition= $request->condition;  
// $imge=$request->file('thum_img');
//   $img_name=$imge->getClientOriginalName();
//   $imge->move('./upload',$img_name);
 $save_project->thum_img=$save_project->thum_img; 
 $save_project->details= $request->details;   
$save_project->save();


// foreach ($request->file('image') as  $proimages) {

//  $proimag = new Image();
// $proimg_name=$proimages->getClientOriginalName();
// $proimages->move('./proupload',$proimg_name);

// $proimag->image=$proimg_name;
// $proimag->pid=$save_product->id;
// $proimag->save();
// }


return back()->with('success','Data Save Successfully');


}

public function delete_project($id){

$del_pro=Project::where('id',$id)->first();
$del_pro->delete();
return back()->with('success','Data deleted Successfully');


}




}
