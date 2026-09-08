<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = News::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.news.newslisting', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.addnews');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new News;
        $post->title = $request->get('title');
        $post->date = date('Y-m-d', strtotime($request->input('date')));
        $post->short_description = $request->get('short_description');
        $post->url = $request->get('url');
        $post->description = $request->get('description');
        $post->conclusion = $request->get('conclusion');
        $post->meta_title = $request->get('meta_title');
        $post->meta_description = $request->get('meta_description');

        if($request->hasFile('front_image')) {
            $file = $request->file('front_image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/news/news_front_image');
            $file->move($path, $filename);
            $post->front_image = $filename;
        } 

        if($request->hasFile('detail_image')) {
            $file = $request->file('detail_image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/news/news_detail_image');
            $file->move($path, $filename);
            $post->detail_image = $filename;
        }  

        if($request->hasFile('news_cta_image')) {
            $file = $request->file('news_cta_image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/news/news_cta_image');
            $file->move($path, $filename);
            $post->news_cta_image = $filename;
        }

        $post->save();

        return redirect('/admin/news')->with('success', 'News Added Successfully');
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = News::find($id);
        return view('admin.news.editnews', compact('data'));
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
        $post = News::find($id);
        $post->title = $request->get('title');
        $post->date = date('Y-m-d', strtotime($request->input('date')));
        $post->short_description = $request->get('short_description');
        $post->url = $request->get('url');
        $post->description = $request->get('description');
        $post->conclusion = $request->get('conclusion');
        $post->meta_title = $request->get('meta_title');
        $post->meta_description = $request->get('meta_description');
        
        if($request->hasFile('front_image')) {
            $file = $request->file('front_image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/news/news_front_image');
            $file->move($path, $filename);
            $post->front_image = $filename;
        } 

        if($request->hasFile('detail_image')) {
            $file = $request->file('detail_image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/news/news_detail_image');
            $file->move($path, $filename);
            $post->detail_image = $filename;
        }  
        
        if($request->hasFile('news_cta_image')) {
            $file = $request->file('news_cta_image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/news/news_cta_image');
            $file->move($path, $filename);
            $post->news_cta_image = $filename;
        }

        $post->save();
        return redirect('/admin/news')->with('success', 'News Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = News::find($id);
        if ($data) {
        $data->delete();
        return redirect()->back()->with('success', 'Your News Has Been Deleted Successfully!');
        }
    
        return redirect()->back()->with('error', 'News not found!');
    }
}
