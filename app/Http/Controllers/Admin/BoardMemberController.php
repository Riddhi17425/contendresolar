<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BoardMember;
use DataTables; 

class BoardMemberController extends Controller
{
    public function index()
    {
        return view('admin.board_member.index');
    }
    public function create()
    {   
        return view('admin.board_member.create');
    }
    public function store(Request $request)
    {  
        $request->validate([
            'title' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'alt_tag' => 'required|string|max:255',
            'status' => 'required|in:Active,InActive',
        ]);
        
        $newdata = new BoardMember();
        $newdata->title = $request->title;
        $newdata->designation = $request->designation;
        $newdata->description = $request->description;
        $newdata->alt_tag = $request->alt_tag;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('board_members'), $imageName);
            $newdata->image = 'public/board_members/' . $imageName;
        }
        $newdata->status = $request->status;
        $newdata->save();

        return redirect()->route('boardmember')->with('success', 'Data created successfully!');
    }

    public function getBoardMemberData(Request $request)
    {
        $boardmember = BoardMember::get();
         
        return DataTables::of($boardmember)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                
                $editUrl = route('boardmember.edit', $row->id);
                return '
                    <a href="' . $editUrl . '" class="btn btn-outline-primary btn-sm">
                        <i class="icofont-edit"></i>
                    </a>
                    <button type="button" class="btn btn-outline-danger btn-sm delete_boardmember" data-id="' . $row->id . '">
                        <i class="icofont-ui-delete"></i>
                    </button>
                ';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function edit($id)
    {
        $boardmember = BoardMember::findOrFail($id);
        return view('admin.board_member.edit', compact('boardmember'));
    }   

    public function update(Request $request , $id)
    {   

        $newdata = BoardMember::findOrFail($id);
        $request->validate([
            'title' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'alt_tag' => 'required|string|max:255',
            'status' => 'required|in:Active,InActive',
        ]);
        
        $newdata->title = $request->title;
        $newdata->designation = $request->designation;
        $newdata->description = $request->description;
        $newdata->alt_tag = $request->alt_tag;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('board_members'), $imageName);
            $newdata->image = 'public/board_members/' . $imageName;
        }
        $newdata->status = $request->status;
        $newdata->save();

        return redirect()->route('boardmember')->with('success', 'Data updated successfully!');
    }

    public function destroy($id)
    {
        $boardmember = BoardMember::findOrFail($id);
        if ($boardmember) {
            $boardmember->delete();
            return response()->json(['success' => true, 'message' => 'Data deleted successfully.']);
        } else {
            return response()->json(['success' => false, 'message' => 'Data not found.'], 404);
        }
    }
}
