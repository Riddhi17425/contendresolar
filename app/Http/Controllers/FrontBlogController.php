<?php
namespace App\Http\Controllers;

use App\Models\Blog;

class FrontBlogController extends Controller
{
    public function index()
    {
        $title       = "Solar Energy Blog | Expert Insights & Industry Updates";
        $description = "Explore the Contendre Solar blog for solar energy insights, installation guides, industry trends, renewable energy tips, and expert updates.";
        $blogs       = Blog::latest()->get();
        // return $blogs;
        return view('front.blog.blog', compact('title', 'description', 'blogs'));
    }

    public function BlogDetails($url)
    {

        $blogs = Blog::where('url', $url)->first();

        $title       = $blogs->meta_title;
        $description = $blogs->meta_description;

        $faqs = $blogs->title_description ? json_decode($blogs->title_description, true) : [];
        return view('front.blog.blog-detail', compact('title', 'description', 'blogs', 'faqs'));
    }
}
