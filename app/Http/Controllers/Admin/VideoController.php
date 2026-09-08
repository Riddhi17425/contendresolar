<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Video::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.video.videolisting', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.video.addvideo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Video;
        $post->title = $request->get('title');
        $post->description = $request->get('description');
        $post->video_link = $request->get('video_link');
        $post->alt_tag = $request->get('alt_tag');

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/video/video_image');
            $file->move($path, $filename);
            $post->image = $filename;
        }  
        $post->save();

        return redirect('/admin/video')->with('success', 'Video Added Successfully');
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
        $data = Video::find($id);
        return view('admin.video.editvideo', compact('data'));
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
        $post = Video::find($id);
        $post->title = $request->get('title');
        $post->description = $request->get('description');
        $post->video_link = $request->get('video_link');
        $post->alt_tag = $request->get('alt_tag');
     
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/video/video_image');
            $file->move($path, $filename);
            $post->image = $filename;
        }

        $post->save();
        return redirect('/admin/video')->with('success', 'Video Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Video::find($id);
        if ($data) {
        $data->delete();
        return redirect()->back()->with('success', 'Your Video Has Been Deleted Successfully!');
        }
        return redirect()->back()->with('error', 'Video not found!');
    }
}
