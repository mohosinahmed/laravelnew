<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
    public function writePost(){
        $categories=DB::table('categories')->get();
        return view('post.writepost', compact('categories'));
    }

    public function storePost(Request $request){
        $validateData = $request->validate([
            'title' => 'required|max:100',
            'details' => 'required|max:400',           
        ]);

        $data= array();
        $data['title']=$request->title;
        $data['category_id']=$request->category_id;
        $data['details']=$request->details;

        /*DB::table('posts')->insert($data);
        $notification = array(
            'messege' => 'Succefully post inserted',
            'alert-type' => 'success',
        );
        return Redirect()->back()->with($notification);*/

        $image=$request->file('image');
        if($image){
            $image_name=hexdec(uniqId());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/frontend/images/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['data']=$image_url;
            DB::table('posts')->insert($data);
            $notification = array(
                'messege' => 'Succefully post inserted',
                'alert-type' => 'success',
            );
            return Redirect()->back()->with($notification);
        }else{
            DB::table('posts')->insert($data);
            $notification = array(
                'messege' => 'Succefully post inserted',
                'alert-type' => 'success',
            );
            return Redirect()->back()->with($notification);
        }

    }

    public function allPost(){
        // $posts=DB::table('posts')->get();
        $posts=DB::table('posts')
            ->join('categories','posts.category_id', 'categories.id')
            ->select('posts.*', 'categories.name')
            ->get();
        return view('post.allpost', compact('posts'));
    }
    
    public function editPost($id){
        $categories=DB::table('categories')->get();
        $posts=DB::table('posts')->where('id', $id)->first();
        
        return view('post.editpost', compact('categories', 'posts'));
    }
    
    public function updatePost(Request $request, $id){
        $validateData = $request->validate([
            'title' => 'required|max:100',
            'details' => 'required|max:400',           
        ]);

        $data= array();
        $data['title']=$request->title;
        $data['category_id']=$request->category_id;
        $data['details']=$request->details;

        /*DB::table('posts')->insert($data);
        $notification = array(
            'messege' => 'Succefully post inserted',
            'alert-type' => 'success',
        );
        return Redirect()->back()->with($notification);*/

        $image=$request->file('image');
        if($image){
            $image_name=hexdec(uniqId());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/frontend/images/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['data']=$image_url;
            DB::table('posts')->where('id', $id)->update($data);
            $notification = array(
                'messege' => 'Succefully post update',
                'alert-type' => 'success',
            );
            return Redirect()->back()->with($notification);
        }else{
            DB::table('posts')->where('id', $id)->update($data);
            $notification = array(
                'messege' => 'Succefully post upda',
                'alert-type' => 'success',
            );
            return Redirect()->back()->with($notification);
        }
    }
    
    public function showPost($id){
        $posts=DB::table('posts')
            ->join('categories','posts.category_id', 'categories.id')
            ->select('posts.*', 'categories.name')
            ->first();
        return view('post.showpost', compact('posts'));
    }
}
