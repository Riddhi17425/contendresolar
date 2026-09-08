<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\KeyFeature;
use Illuminate\Http\Request;

class KeyFeaturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = KeyFeature::orderBy('created_at', 'desc')->whereNull('deleted_at')->paginate(15);
        return view('admin.keyfeature.keyfeaturelisting', compact('data'));
    }

    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.keyfeature.addkeyfeature');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title'       => 'required|string|unique:key_feature,title',
            'description'     => 'required|string',
            'image'           => 'required|file|mimes:jpg,jpeg,svg,png,webp|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Please fix the validation errors.');
        }


        $post = new KeyFeature;
        
        $post->title = $request->get('title');
        $post->description = $request->get('description');
        $post->alt_tag = $request->get('alt_tag');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/keyfeature_images');
            $file->move($path, $filename);
            $post->image = $filename;
        }

        $post->save();

        return redirect('/admin/keyfeature')->with('success', 'Data Added Successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = KeyFeature::find($id);
        return view('admin.keyfeature.editkeyfeature', compact('data'));
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

        $validator = Validator::make($request->all(), [
            'title'       => 'required|string|unique:key_feature,title,' . $id,
            'description' => 'required|string',
            'image'       => 'nullable|file|mimes:jpg,jpeg,svg,png,webp|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Please fix the validation errors.');
        }

        $post = KeyFeature::findOrFail($id);

        $post->title = $request->get('title');
        $post->description = $request->get('description');
        $post->alt_tag = $request->get('alt_tag');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/keyfeature_images');
            $file->move($path, $filename);
            $post->image = $filename;
        }

        $post->save();

        return redirect('/admin/keyfeature')->with('success', 'KeyFeature updated successfully.');
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = KeyFeature::find($id);
        if ($data) {
        $data->delete();
        return redirect()->back()->with('success', 'Your Data Has Been Deleted Successfully!');
        }
    
        return redirect()->back()->with('error', 'Data not found!');
    }
}