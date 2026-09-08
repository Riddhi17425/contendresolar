<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Download;
use App\Models\DownloadCategory;

class DownloadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Download::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.download.downloadlisting', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = DownloadCategory::all();
        return view('admin.download.adddownload',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Download;
        $post->download_category_id = $request->get('download_category_id');
        $post->title = $request->get('title');
    
        if ($request->hasFile('download_link')) {
        $file = $request->file('download_link');
        $filename = $file->getClientOriginalName();
        $file->move(public_path('/download_link'), $filename);
        $post->download_link = $filename;
        }
        $post->save();

        return redirect('/admin/download')->with('success', 'Download Added Successfully');
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
        $categories = DownloadCategory::all();
        $data = Download::find($id);
        return view('admin.download.editdownload', compact('data','categories'));
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
        $post = Download::find($id);
        $post->download_category_id = $request->get('download_category_id');
        $post->title = $request->get('title');
        
        if($request->hasFile('download_link')) {
            $file = $request->file('download_link');
            $filename = $file->getClientOriginalName();
            $path = public_path('/download_link');
            $file->move($path, $filename);
            $post->download_link = $filename;
        }
        $post->save();
        return redirect('/admin/download')->with('success', 'Download Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Download::find($id);
        if ($data) {
        $data->delete();
        return redirect()->back()->with('success', 'Your Download Has Been Deleted Successfully!');
        }
        return redirect()->back()->with('error', 'Download not found!');
    }
}
