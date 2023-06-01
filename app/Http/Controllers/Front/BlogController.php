<?php

namespace App\Http\Controllers\Front;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index(){
        $blogs=Blog::all();
        $data['className']='blog';
        return view('blog.index',$data,compact('blogs'));
    }
    public function show($id){
        $blog=Blog::find($id);
        $data['className']='blog-post';
        return view('blog.show',$data,compact('blog'));
    }
}
