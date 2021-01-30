<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::latest()->paginate(5);
        return view('blogs.index', compact('blogs'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogs.create');    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title'=> 'required',
            'descriptions'=>'required',
            'author'=>'required',
            'img_path' => 'required|image|max:5048',

        ]);
        $imageName = time().'.'.$request->img_path->extension();  
        $request->img_path->move(public_path('upload'), $imageName);
        $data = new Blog();
        $data->title = $request->title;
        $data->descriptions = $request->descriptions;
        $data->author = $request->author;
        $data->img_path = $imageName;
        $data->save();


        return redirect()->route('adminBlog.index')->with('success', 'Blog created succesfully!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('blogs.show', [
            'blogs' => Blog::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('blogs.edit', [
            'blogs' => Blog::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $data)
    {
        $request->validate([
            'title'=> 'required',
            'descriptions'=>'required',
            'author'=>'required',
            'img_path' => 'required|image|max:5048',

        ]);
        $imageName = time().'.'.$request->img_path->extension();  
        $request->img_path->move(public_path('upload'), $imageName);
        $data = new Blog();
        $data->title = $request->title;
        $data->descriptions = $request->descriptions;
        $data->author = $request->author;
        $data->img_path = $imageName;
        $data->update();
       

        return redirect()->route('adminBlog.index')->with('success', 'Blog created succesfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blog::destroy($id);
        return redirect()->route('adminBlog.index')->with('success', 'profile Deleted succesfully!!');
    }
}
