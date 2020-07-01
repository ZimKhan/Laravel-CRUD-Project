<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class BoloController extends Controller
{
    public function Add_Category (){
        return view ('posts.add_category');
    }
    public function Store_Category (Request $request){
        $data=array();
        $data['name']=$request->name;
        $data['slug']=$request->slug;
        $category=DB::table('categories')->insert($data);
        $notification=array(
            'message'=>'Successfully Category Inserted',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
    public function All_Category (){
        $category=DB::table('categories')->get();
        return view ('posts.all_category',compact('category'));
    }
    public function View_Category ($id){
        $category=DB::table('categories')->where('id',$id)->first();
        return view ('posts.view',compact('category'));
    }
    public function Delete_Category ($id){
        $delete=DB::table('categories')->where('id',$id)->delete();
        $notification=array(
            'message'=>'Successfully Category Deleted',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
    public function Edit_Category($id){
        $category=DB::table('categories')->where('id',$id)->first();
        return view ('posts.edit',compact('category'));
    }
    public function Update_Category (Request $request,$id){
        $data=array();
        $data['name']=$request->name;
        $data['slug']=$request->slug;
        $category=DB::table('categories')->where('id',$id)->update($data);
        $notification=array(
            'message'=>'Successfully Category Updated',
            'alert-type'=>'success'
        );
        return Redirect()->route('all.category')->with($notification);
    }

}
