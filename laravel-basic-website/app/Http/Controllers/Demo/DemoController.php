<?php

namespace App\Http\Controllers\Demo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogCategory;
use App\Models\Blog;
class DemoController extends Controller
{
    


    public function HomeMain(){
        $categories = BlogCategory::orderBy('blog_category','ASC')->get();
        $allblogs = Blog::latest()->paginate(3);
        return view('frontend.blog', compact('categories', 'allblogs'));
    }// end mehtod 


    public function Index(){
        return view('about');
    } // end mehtod 


    public function ContactMethod(){
        return view('contact');
    }


}
