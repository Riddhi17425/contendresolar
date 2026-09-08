<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HiroSection;
use DataTables; 
class HiroSectionController extends Controller
{
    public function index()
    {
        return view('admin.hiro_section.index');
    }
    public function create()
    {   
        return view('admin.hiro_section.create');
    }
    public function store(Request $request)
    {   
        
        $request->validate([
            'title' => 'required|string|max:255',
            'sub_title' => 'required|string|max:255',
            'short_description' => 'required|string',
            'long_description' => 'nullable|string',
            'page_name' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'status' => 'required|in:Active,InActive',
        ]);
        
        $newdata = new HiroSection();
        $newdata->title = $request->title;
        $newdata->sub_title = $request->sub_title;
        $newdata->short_description = $request->short_description;
        $newdata->long_description = $request->long_description;
        $newdata->page_name = $request->page_name;
        $newdata->label = $request->label ?? null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('hiro_section'), $imageName);
            $newdata->image = 'public/hiro_section/' . $imageName;
        }
        $newdata->status = $request->status;
        $newdata->save();

        return redirect()->route('hiro.section')->with('success', 'Hiro Section created successfully!');
    }

    public function getHiroSectionData(Request $request)
    {
        $hiro_data = HiroSection::get();
         
        return DataTables::of($hiro_data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                
                $editUrl = route('hiro.section.edit', $row->id);
                return '
                    <a href="' . $editUrl . '" class="btn btn-outline-primary btn-sm">
                        <i class="icofont-edit"></i>
                    </a>
                    <button type="button" class="btn btn-outline-danger btn-sm delete_hiro" data-id="' . $row->id . '">
                        <i class="icofont-ui-delete"></i>
                    </button>
                ';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function edit($id)
    {
        $hirosection = HiroSection::findOrFail($id);
        return view('admin.hiro_section.edit', compact('hirosection'));
    }   

    public function update(Request $request , $id)
    {   

        $newdata = HiroSection::findOrFail($id);
        $request->validate([
            'title' => 'required|string|max:255',
            'sub_title' => 'required|string|max:255',
            'short_description' => 'required|string',
            'long_description' => 'nullable|string',
            'page_name' => 'required|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'status' => 'required|in:Active,InActive',
            
        ]);
        
        $newdata->title = $request->title;
        $newdata->sub_title = $request->sub_title;
        $newdata->short_description = $request->short_description;
        $newdata->long_description = $request->long_description;
        $newdata->page_name = $request->page_name;
        $newdata->label = $request->label;
        $newdata->image = $newdata->image; 
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('hiro_section'), $imageName);
            $newdata->image = 'public/hiro_section/' . $imageName;
        }
        $newdata->status = $request->status;
        $newdata->save();

        return redirect()->route('hiro.section')->with('success', 'Hiro Section updated successfully!');
    }

    public function destroy($id)
    { 
        $hirosection = HiroSection::findOrFail($id);
        if ($hirosection) {
            $hirosection->delete();
            return response()->json(['success' => true, 'message' => 'Hiro Section deleted successfully.']);
        } else {
            return response()->json(['success' => false, 'message' => 'Hiro Section not found.'], 404);
        }
    }
}
