<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {

        return view('front-end.home.home');
//        return view('front-end.master' );

    }

    public function about()
    {
        return view('front-end.about.about' );
    }

    public function contact()
    {
        return view('front-end.contact.contact' );
    }

    public function category()
    {
        return view('front-end.category.category' );
    }

    public function searchResult()
    {
        return view('front-end.search-result.search-result');
    }


    public function blog()
    {
        return view('front-end.blog.blog',[
            'blogs' => Blog::where('status',1)
                ->orderby('id', 'desc')
                ->take(5)
                ->get()
        ] );
    }

    public function blogDetails($id)
    {
        return view('front-end.single.single' ,[
            'blogs' => Blog::where('id',$id)
                ->get()
        ]);

    }

}
