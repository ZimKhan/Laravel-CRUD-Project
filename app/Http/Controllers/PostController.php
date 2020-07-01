<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PostController extends Controller
{
    public function Write_Post (){
        $category=DB::table('categories')->get();
        return view ('posts.write_post',compact('category'));
    }
    public function Store_Post (Request $request){
        $data=array();
        $data['category_id']=$request->category_id;
        $data['title']=$request->title;
        $data['details']=$request->details;
        $data['image']=$request->image;
        $category=DB::table('categories')->insert($data);
        $notification=array(
            'message'=>'Successfully Category Inserted',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
}
