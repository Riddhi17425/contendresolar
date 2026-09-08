<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $data = Blog::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.blog.bloglisting', compact('data'));
    }

    public function create()
    {
        return view('admin.blog.addblog');
    }

    public function store(Request $request)
    {
        $faqTitles = $request->faq_title ?? [];
        $faqDescriptions = $request->faq_description ?? [];

        $metaBlocks = [];
        foreach ($faqTitles as $index => $faqTitle) {
            $metaBlocks[] = [
                'title' => $faqTitle,
                'description' => $faqDescriptions[$index] ?? '',
            ];
        }
        
        $post = new Blog;
        $post->title = $request->get('title');
        $post->date = date('Y-m-d', strtotime($request->input('date')));
        $post->short_description = $request->get('short_description');
        $post->url = $request->get('url');
        $post->description = $request->get('description');
        $post->conclusion = $request->get('conclusion');
        $post->meta_title = $request->get('meta_title');
        $post->meta_description = $request->get('meta_description');
        $post->title_description = json_encode($metaBlocks);

        if($request->hasFile('front_image')) {
            $file = $request->file('front_image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/blogs/blog_front_image');
            $file->move($path, $filename);
            $post->front_image = $filename;
        } 

        if($request->hasFile('detail_image')) {
            $file = $request->file('detail_image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/blogs/blog_detail_image');
            $file->move($path, $filename);
            $post->detail_image = $filename;
        }  

        if($request->hasFile('blog_cta_image')) {
            $file = $request->file('blog_cta_image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/blogs/blog_cta_image');
            $file->move($path, $filename);
            $post->blog_cta_image = $filename;
        }

        $post->save();

        return redirect('/admin/blog')->with('success', 'Blog Added Successfully');
    }

    public function edit($id)
    {
        $data = Blog::find($id);
        return view('admin.blog.editblog', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $post = Blog::find($id);
        $faqTitles = $request->faq_title ?? [];
        $faqDescriptions = $request->faq_description ?? [];
    
        $metaBlocks = [];
        foreach ($faqTitles as $index => $faqTitle) {
            $metaBlocks[] = [
                'title' => $faqTitle,
                'description' => $faqDescriptions[$index] ?? '',
            ];
        }
    
        $post->title = $request->get('title');
        $post->date = date('Y-m-d', strtotime($request->input('date')));
        $post->short_description = $request->get('short_description');
        $post->url = $request->get('url');
        $post->description = $request->get('description');
        $post->conclusion = $request->get('conclusion');
        $post->meta_title = $request->get('meta_title');
        $post->meta_description = $request->get('meta_description');
        $post->title_description = json_encode($metaBlocks);
        
        if($request->hasFile('front_image')) {
            $file = $request->file('front_image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/blogs/blog_front_image');
            $file->move($path, $filename);
            $post->front_image = $filename;
        } 

        if($request->hasFile('detail_image')) {
            $file = $request->file('detail_image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/blogs/blog_detail_image');
            $file->move($path, $filename);
            $post->detail_image = $filename;
        }  
        
        if($request->hasFile('blog_cta_image')) {
            $file = $request->file('blog_cta_image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/blogs/blog_cta_image');
            $file->move($path, $filename);
            $post->blog_cta_image = $filename;
        }

        $post->save();
        return redirect('/admin/blog')->with('success', 'Blog Updated Successfully');
    }

    public function destroy($id)
    {
        $data = Blog::find($id);
        if ($data) {
        $data->delete();
        return redirect()->back()->with('success', 'Your Blog Has Been Deleted Successfully!');
        }
    
        return redirect()->back()->with('error', 'Blog not found!');
    }
}