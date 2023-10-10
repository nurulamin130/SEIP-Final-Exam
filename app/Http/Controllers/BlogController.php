<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return  view('admin.blog.index',[
            'blogs'=>Blog::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return  view('admin.blog.create',[
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Blog::saveInfo($request);
        return redirect(route('blogs.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Blog::checkStatus($id);
        return  back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return  view('admin.blog.edit',[
            'blog'=>Blog::find($id),
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Blog::saveInfo($request,$id);
        return redirect(route('blogs.index'));
    }

    /**
     * Remove the specified resource from storage.
     */

    private static $blog;
    public function destroy(string $id)
    {
        self::$blog = Blog::find($id);

        if (self::$blog->image) {
            if (file_exists(self::$blog->image)) {
                unlink(self::$blog->image);
            }
        }

        self::$blog->delete();
        return back();

    }















}