<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Blog;

class SitemapController extends Controller
{
    protected function xmlResponse(string $xml)
    {
        return response($xml, 200)
            ->header('Content-Type', 'application/xml');
    }

    public function index()
    {
        $todayTime = now()->toAtomString();

        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        // HOMEPAGE
        $xml .= '
        <url>
            <loc>' . url('/') . '</loc>
            <lastmod>' . $todayTime . '</lastmod>
            <priority>1.00</priority>
        </url>';

        // PRODUCTS
        $products = Product::where('status', 'Active')
            ->whereNotNull('url')
            ->where('url', '!=', '')
            ->orderBy('updated_at', 'asc')
            ->get();

        foreach ($products as $product)
        {
            $xml .= '
            <url>
                <loc>' . url('/product/' . $product->url) . '</loc>
                <lastmod>' . optional($product->updated_at)->toAtomString() . '</lastmod>
                <priority>0.80</priority>
            </url>';
        }

        // STATIC PAGES
        $staticPages = [
            'solar-panel-for-home',
            'contact-us',
            'career',
            'downloads',
            'videos',
            'clientele',
            'milestone',
            'bipv-solution',
            'commercial-and-industrial-solar',
            'utility-scale',
            'product-ally',
            'project-ally',
            'channel-sales',
            'solar-epc-company',
            'white-labeling-oem-solar-manufacturing',
            'solar-developer',
            'commercial-and-industrial-solar-solutions',
            'commercial-industrial-solution',
            'locater-ally',
            'news-list',
            'solar-panel-manufacturer',
            'overview',
            'sustainability',
            'distributor',
            'blog',
        ];

        foreach ($staticPages as $page)
        {
            $xml .= '
            <url>
                <loc>' . url('/' . $page) . '</loc>
                <lastmod>' . $todayTime . '</lastmod>
                <priority>0.60</priority>
            </url>';
        }

        // BLOGS
        $blogs = Blog::whereNotNull('url')
            ->where('url', '!=', '')
            ->orderBy('updated_at', 'asc')
            ->get();

        foreach ($blogs as $blog)
        {
            $xml .= '
            <url>
                <loc>' . url('/blog/' . $blog->url) . '</loc>
                <lastmod>' . optional($blog->updated_at)->toAtomString() . '</lastmod>
                <priority>0.60</priority>
            </url>';
        }

        $xml .= '</urlset>';

        return $this->xmlResponse($xml);
    }
}