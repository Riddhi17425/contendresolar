<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DownloadCategory;

class DownloadCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DownloadCategory::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.downloadcategory.downloadcategorylisting', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.downloadcategory.adddownloadcategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new DownloadCategory;
        $post->name = $request->get('name');
        $post->url = $request->get('url');
       
        $post->save();

        return redirect('/admin/downloadcategory')->with('success', 'Download Category Added Successfully');
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
        $data = DownloadCategory::find($id);
        return view('admin.downloadcategory.editdownloadcategory', compact('data'));
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
        $post = DownloadCategory::find($id);
        $post->name = $request->get('name');
        $post->url = $request->get('url');
        
        $post->save();
        return redirect('/admin/downloadcategory')->with('success', 'Download Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = DownloadCategory::find($id);
        if ($data) {
        $data->delete();
        return redirect()->back()->with('success', 'Your Download Category Has Been Deleted Successfully!');
        }
    
        return redirect()->back()->with('error', 'Download Category not found!');
    }
}
