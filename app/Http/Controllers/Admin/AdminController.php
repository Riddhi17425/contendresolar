<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){
        $blogCount = Blog::wherenull('deleted_at')->count();
        return view('admin.admin',compact('blogCount'));
    }
	
}