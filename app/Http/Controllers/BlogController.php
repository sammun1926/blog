<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view("pages.index", compact('blogs'));
    }


    public function create()
    {
        $blog = new Blog();
        return view("pages.create", compact('blog'));
    }



    public function store(Request $request)
    {
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->author = $request->author;
        $blog->save();
        return redirect()->route('blog.index');
    }

 
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view("pages.edit", compact('blog'));
    }


    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->author = $request->author;
        $blog->update();
        return redirect()->route('blog.index');
    }


    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect()->route('blog.index');
    }
}