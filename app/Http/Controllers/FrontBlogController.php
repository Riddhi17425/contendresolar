<?php
namespace App\Http\Controllers;

use App\Models\Blog;

class FrontBlogController extends Controller
{
    /**
     * Sirf wahi blogs jo delete nahi hue.
     * Agar blogs table me status column hai to neeche wali line uncomment karo
     * (column ka naam aur value apne table ke hisaab se badlo).
     */
    private function activeBlogs()
    {
        return Blog::whereNull('deleted_at');
        // return Blog::whereNull('deleted_at')->where('status', 'Active');
    }

    public function index()
    {
        $title       = "Solar Energy Blog | Expert Insights & Industry Updates";
        $description = "Explore the Contendre Solar blog for solar energy insights, installation guides, industry trends, renewable energy tips, and expert updates.";
        $blogs       = $this->activeBlogs()->latest()->get();

        return view('front.blog.blog', compact('title', 'description', 'blogs'));
    }

    public function BlogDetails($url)
    {
        $blogs = $this->activeBlogs()->where('url', $url)->firstOrFail();

        $title       = $blogs->meta_title;
        $description = $blogs->meta_description;

        $faqs = $blogs->title_description ? json_decode($blogs->title_description, true) : [];

        return view('front.blog.blog-detail', compact('title', 'description', 'blogs', 'faqs'));
    }

    public function authorDetail($slug)
    {
        abort_if($slug !== 'yash-sheth', 404);

        $title       = "Founder & Director at Contendre Solar | Yash Sheth";
        $description = "Meet Yash Sheth, Founder & Director at Contendre Solar, with expertise in solar manufacturing, renewable energy, and sustainable solar solutions.";

        $blogs = $this->activeBlogs()->latest()->get();

        return view('layouts.blog_author_meta', [
            'variant'     => 'page',
            'blogs'       => $blogs,
            'title'       => $title,
            'description' => $description,
        ]);
    }
}