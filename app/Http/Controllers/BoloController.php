<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BoloController extends Controller
{

    public function addCategory(){
        return view('post.add_category');
    }

    public function storeCategory(Request $request){
        $validateData = $request->validate([
            'name' => 'required|unique:categories|max:25',
            'slug' => 'required|unique:categories|max:25',       
        ]);

        $data = array();
        $data['name'] = $request->name;
        $data['slug'] = $request->slug;
        $category = DB::table('categories')->insert($data);

        if($category){
            $notification = array(
                'messege' => 'Succefully category inserted',
                'alert-type' => 'success',
            );
            return Redirect()->route('all.category')->with($notification);
        }else{
            $notification = array(
                'messege' => 'something wend wrong',
                'alert-type' => 'error',
            );
            return Redirect()->back()->with($notification);
        }

    }

    public function allCategory(){
        $category=DB::table('categories')->get();
        return view('post.all_category', compact('category'));
    }

    public function viewCategory($id){
        $category=DB::table('categories')->where('id',$id)->first();
        return view('post.categoryview', compact('category'));
    }

    public function deleteCategory($id){
        $delete=DB::table('categories')->where('id',$id)->delete();
        $notification = array(
            'messege' => 'Succefully category deleted',
            'alert-type' => 'success',
        );
        return Redirect()->back()->with($notification);
    }

    public function editCategory($id){
        $category=DB::table('categories')->where('id', $id)->first();
        return view('post.editcategory', compact('category'));
    }

    public function updateCategory(Request $request, $id){
        $validateData = $request->validate([
            'name' => 'required|unique:categories|max:25',
            'slug' => 'required|unique:categories|max:25',       
        ]);

        $data = array();
        $data['name'] = $request->name;
        $data['slug'] = $request->slug;
        $category = DB::table('categories')->where('id', $id)->update($data);

        if($category){
            $notification = array(
                'messege' => 'Succefully category update',
                'alert-type' => 'success',
            );
            return Redirect()->route('all.category')->with($notification);
        }else{
            $notification = array(
                'messege' => 'something wend wrong',
                'alert-type' => 'notehin to update',
            );
            return Redirect()->route('all.category')->with($notification);
        }
    }
}
