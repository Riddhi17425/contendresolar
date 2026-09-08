<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\KeyFeature;
use DataTables; 
class ProductController extends Controller
{
    public function index()
    {
        return view('admin.product.index');
    }
    public function create()
    {   
        $keyfeature = KeyFeature::all();
        return view('admin.product.create',compact('keyfeature'));
    }
    public function store(Request $request) 
    {  
        // dd($request->all());
        $request->validate([
            'title' => 'required|string|max:255',
            'sub_title' => 'required|string|max:255',
            'keyfeature_id' => 'required|array|min:1',
            'short_description' => 'required|string',
            'url' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|in:Active,InActive',
            'maximum_efficiency'      => 'required|string|max:255',
            'maximum_power_output'    => 'required|string|max:255',
            'positive_power_tolerance'=> 'required|string|max:255',
            'cells_guaranted'         => 'required|string|max:255',
            'banner_title'            => 'required|string|max:255',
            'banner_image'            => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'banner_description'      => 'required|string'
        ]);
        
        $newdata = new Product();
        $newdata->keyfeature_id = json_encode($request->keyfeature_id,true);
        $newdata->title = $request->title;
        $newdata->sub_title = $request->sub_title;
        $newdata->short_description = $request->short_description;
        $newdata->url = $request->url;
        $newdata->maximum_efficiency       = $request->maximum_efficiency;
        $newdata->maximum_power_output     = $request->maximum_power_output;
        $newdata->positive_power_tolerance = $request->positive_power_tolerance;
        $newdata->cells_guaranted          = $request->cells_guaranted;
        $newdata->banner_title             = $request->banner_title;
        $newdata->banner_description       = $request->banner_description;
        $newdata->meta_title             = $request->meta_title;
        $newdata->meta_description       = $request->meta_description;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('product_images'), $imageName);
            $newdata->image = 'public/product_images/' . $imageName;
        }
        if ($request->hasFile('banner_image')) {
            $image = $request->file('banner_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('product_images'), $imageName);
            $newdata->banner_image = 'public/product_images/' . $imageName;
        }
        $newdata->status = $request->status;
        $newdata->save();

        return redirect()->route('product')->with('success', 'Product created successfully!');
    }

    public function getProductData(Request $request)
    {
        $product_data = Product::get();
         
        return DataTables::of($product_data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                
                $editUrl = route('product.edit', $row->id);
                return '
                    <a href="' . $editUrl . '" class="btn btn-outline-primary btn-sm">
                        <i class="icofont-edit"></i>
                    </a>
                    <button type="button" class="btn btn-outline-danger btn-sm delete_product" data-id="' . $row->id . '">
                        <i class="icofont-ui-delete"></i>
                    </button>
                ';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $keyfeature  = KeyFeature::all();
        return view('admin.product.edit', compact('product','keyfeature'));
    }   

    public function update(Request $request , $id)
    {   

        $newdata = Product::findOrFail($id);
        $request->validate([
            'title' => 'required|string|max:255',
            'sub_title' => 'required|string|max:255',
            'keyfeature_id' => 'required|array|min:1',
            'short_description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|in:Active,InActive',
            'maximum_efficiency'      => 'required|string|max:255',
            'maximum_power_output'    => 'required|string|max:255',
            'positive_power_tolerance'=> 'required|string|max:255',
            'cells_guaranted'         => 'required|string|max:255',
            'banner_title'            => 'required|string|max:255',
            'banner_image'            => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'banner_description'      => 'required|string'
        ]);
        
        $newdata->title = $request->title;
        $newdata->keyfeature_id = json_encode($request->keyfeature_id,true);
        $newdata->sub_title = $request->sub_title;
        $newdata->short_description = $request->short_description;
        $newdata->url = $request->url;
        $newdata->image = $newdata->image;
        $newdata->maximum_efficiency       = $request->maximum_efficiency;
        $newdata->maximum_power_output     = $request->maximum_power_output;
        $newdata->positive_power_tolerance = $request->positive_power_tolerance;
        $newdata->cells_guaranted          = $request->cells_guaranted;
        $newdata->banner_title             = $request->banner_title;
        $newdata->banner_description       = $request->banner_description;
        $newdata->meta_title             = $request->meta_title;
        $newdata->meta_description       = $request->meta_description;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('product_section'), $imageName);
            $newdata->image = 'public/product_section/' . $imageName;
        }
        if ($request->hasFile('banner_image')) {
            $image = $request->file('banner_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('product_images'), $imageName);
            $newdata->banner_image = 'public/product_images/' . $imageName;
        }
        $newdata->status = $request->status;
        $newdata->save();

        return redirect()->route('product')->with('success', 'Product updated successfully!');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        if ($product) {
            $product->delete();
            return response()->json(['success' => true, 'message' => 'Product deleted successfully.']);
        } else {
            return response()->json(['success' => false, 'message' => 'Product not found.'], 404);
        }
    }
}
