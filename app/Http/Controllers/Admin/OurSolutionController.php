<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OurSolution;

class OurSolutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = OurSolution::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.oursolution.oursolutionlisting', compact('data'));
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.oursolution.addoursolution');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new OurSolution;
        $post->title = $request->get('title');
        $post->url = $request->get('url');
        $post->short_description = $request->get('short_description');
        $post->description = $request->get('description');
        

        $post->save();

        return redirect('/admin/oursolution')->with('success', 'Our Solution Added Successfully');
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
        $data = OurSolution::find($id);
        return view('admin.oursolution.editoursolution', compact('data'));
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
        $post = OurSolution::find($id);
        $post->title = $request->get('title');
        $post->url = $request->get('url');
        $post->short_description = $request->get('short_description');
        $post->description = $request->get('description');

     
        $post->save();
        return redirect('/admin/oursolution')->with('success', 'Our Solution Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = OurSolution::find($id);
        if ($data) {
        $data->delete();
        return redirect()->back()->with('success', 'Your Our Solution Has Been Deleted Successfully!');
        }
        return redirect()->back()->with('error', 'Our Solution not found!');
    }
}
