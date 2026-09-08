<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Faq::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.faq.faqlisting', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.faq.addfaq');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    $titles = $request->title;
    $descriptions = $request->description;

    $metaBlocks = [];

    foreach ($titles as $index => $title) {
        $block = [
            'title' => $title,
            'description' => $descriptions[$index],
        ];

        $metaBlocks[] = $block;
    }

    $faq = new Faq();
    $faq->faq_title = $request->faq_title;
    $faq->faq_url = $request->faq_url;
    $faq->title_description = json_encode($metaBlocks);
    $faq->save();

    return redirect('/admin/faq')->with('success', 'Faq Added Successfully');
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
        $data = Faq::find($id);
        return view('admin.faq.editfaq', compact('data'));
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
        $faq = Faq::find($id);
        $titles = $request->title;
        $descriptions = $request->description;

        $metaBlocks = [];

        foreach ($titles as $index => $title) {
            $block = [
                'title' => $title,
                'description' => $descriptions[$index],
            ];

            $metaBlocks[] = $block;
        }

        $faq->faq_title = $request->faq_title;
        $faq->faq_url = $request->faq_url;
        $faq->title_description = json_encode($metaBlocks);
        $faq->save();

        return redirect('/admin/faq')->with('success', 'Faq Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Faq::find($id);
        if ($data) {
            $data->delete();
            return redirect()->back()->with('success', 'Your Faq Has Been Deleted Successfully!');
            }
            return redirect()->back()->with('error', 'Faq not found!');
    }
}
