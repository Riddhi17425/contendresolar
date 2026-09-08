<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OurExpert;

class OurExpertController extends Controller
{
    /**
     * Display a listing of the resource
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = OurExpert::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.ourexpert.ourexpertlisting', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ourexpert.addourexpert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new OurExpert;
        $post->title = $request->get('title');
         $post->name = $request->get('name');
        $post->short_description = $request->get('short_description');
        
        $post->save();

        return redirect('/admin/ourexpert')->with('success', 'Our Expert Added Successfully');
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
        $data = OurExpert::find($id);
        return view('admin.ourexpert.editourexpert', compact('data'));
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
        $post = OurExpert::find($id);
        $post->title = $request->get('title');
        $post->name = $request->get('name');
        $post->short_description = $request->get('short_description');

        $post->save();
        return redirect('/admin/ourexpert')->with('success', 'Our Expert Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = OurExpert::find($id);
        if ($data) {
        $data->delete();
        return redirect()->back()->with('success', 'Your Our Expert Has Been Deleted Successfully!');
        }
    
        return redirect()->back()->with('error', 'Our Expert not found!');
    }
}
