<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function index()
    {
        $data = ProductCategory::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.productcategory.index', compact('data'));
    }

    public function create()
    {
        return view('admin.productcategory.create');
    }

    public function store(Request $request)
    {
        
        $post = new ProductCategory;
        $post->title = $request->get('title');
        $post->alt_tag = $request->get('alt_tag');
        $post->short_description = $request->get('short_description');
        $post->url = $request->get('url');
        

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/productcategory');
            $file->move($path, $filename);
            $post->image = $filename;
        } 

        

        $post->save();

        return redirect('/admin/productcategory')->with('success', 'Product Category Added Successfully');
    }

    public function edit($id)
    {
        $data = ProductCategory::find($id);
        return view('admin.productcategory.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $post = ProductCategory::find($id);
        $post->title = $request->get('title');
        $post->alt_tag = $request->get('alt_tag');
        $post->short_description = $request->get('short_description');
        $post->url = $request->get('url');
        
        
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/productcategory');
            $file->move($path, $filename);
            $post->image = $filename;
        } 

       

        $post->save();
        return redirect('/admin/productcategory')->with('success', 'Blog Updated Successfully');
    }

    public function destroy($id)
    {
        $data = ProductCategory::find($id);
        if ($data) {
        $data->delete();
        return redirect()->back()->with('success', 'Your Product Category Has Been Deleted Successfully!');
        }
    
        return redirect()->back()->with('error', 'Product Category not found!');
    }
}