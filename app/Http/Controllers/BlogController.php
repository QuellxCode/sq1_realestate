<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Image;
use Session;
use App\Categories;
use App\BlogCategory;
use App\BlogComment;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::get();
        return view('admin.blog.index',compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Categories::get();
        return view('admin.blog.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'post' => 'required',
            'feature_image' => 'required',
            'category'=> 'required',
            'author' =>'required',
        ]);
        $data = $request->all();
        $photo = $request->file('feature_image');
        if (count($photo) > 0) {
            $photo_filename = time() . '.' . $photo->getClientOriginalExtension();
            $photo_path = 'application-file/img/' . $photo_filename;
            Image::make($photo->getRealPath())->save($photo_path);
            $data['feature_image'] = $photo_filename;
        }
        if($request->hasFile('video') && $request->file('video')->isValid()){
            $file = $request->file('video');
            $file_name = str_random(30) . '.' . $file->getClientOriginalExtension();
            $file->move('application-file/img/', $file_name);
            $data['video'] = $file_name;
        }
        $blog = Blog::create($data);
        foreach($request->category as $value){
            BlogCategory::create(['blog_id'=>$blog->id , 'category_id'=>$value]);
        }
        $msg = "Blog  is created";
        Session::flash('success', $msg);
        return redirect('/blog-config');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    public function blogComment($id){
        $blog_comment = BlogComment::where('blog_id',$id)->get();
        return view('admin.blog.blog-comments',compact('blog_comment'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Categories::get();
        $blog_category =  BlogCategory::where('blog_id',$id)->get();
        $blog = Blog::where('id',$id)->first();
        return view('admin.blog.update',compact('blog','category','blog_category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'post' => 'required',
            'category'=>'required',
            'author' =>'required',
        ]);
        $data = $request->all();
        $data = request()->except(['_token', '_method','category','blog']);
        $photo = $request->file('feature_image');
        if (count($photo) > 0) {
            $photo_filename = time() . '.' . $photo->getClientOriginalExtension();
            $photo_path = 'application-file/img/' . $photo_filename;
            Image::make($photo->getRealPath())->save($photo_path);
            $data['feature_image'] = $photo_filename;
        }
        if($request->hasFile('video') && $request->file('video')->isValid()){
            $file = $request->file('video');
            $file_name = str_random(30) . '.' . $file->getClientOriginalExtension();
            $file->move('application-file/img/', $file_name);
            $data['video'] = $file_name;
        }
        Blog::where('id',$id)->update($data);
        BlogCategory::where('blog_id',$id)->delete();
        foreach($request->category as $value){
            BlogCategory::create(['blog_id'=> $id , 'category_id'=>$value]);
        }
        $msg = "Blog is updated";
        Session::flash('success', $msg);
        return redirect('/blog-config');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::where('id',$id)->first();
        $blog->delete();
        $msg = "Blog is delete";
        Session::flash('success', $msg);
        return redirect()->back();
    }
}
