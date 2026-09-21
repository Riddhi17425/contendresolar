<?php
namespace App\Http\Controllers;

use App\Mail\SendCareerMailToAdmin;
use App\Mail\SendCareerMailToUser;
use App\Mail\SendConsultancyMailToAdmin;
use App\Mail\SendConsultancyMailToUser;
use App\Mail\SendContactMailToAdmin;
use App\Mail\SendContactMailToUser;
use App\Mail\SendDistributorMailToAdmin;
use App\Mail\SendDistributorMailToUser;
use App\Mail\SendPartnerMailToAdmin;
use App\Mail\SendPartnerMailToUser;
use App\Mail\SendServiceMailToAdmin;
use App\Mail\SendServiceMailToUser;
use App\Models\Blog;
use App\Models\BoardMember;
use App\Models\Brand;
use App\Models\Career;
use App\Models\Certificate;
use App\Models\City;
use App\Models\Client;
use App\Models\Consultancy;
use App\Models\Contact;
use App\Models\Country;
use App\Models\Distributors;
use App\Models\Download;
use App\Models\DownloadCategory;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\Milestone;
use App\Models\News;
use App\Models\OurExpert;
use App\Models\OurSolution;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductRequest;
use App\Models\Service;
use App\Models\State;
use App\Models\Video;
use App\Models\WhatsappInquiry;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\ImageManager;

class DashboardController extends Controller
{

    /**
     * Google Apps Script Web App URL jahan baaki saari inquiries (contact, career,
     * service, partner, consultancy, distributor) save hoti hain.
     */
    private $googleSheetUrl = 'https://script.google.com/macros/s/AKfycbymBGWV7QNbMNb-Yb5YQHeFiZM1w5t6fXsddHCyPohUQ7PnqpraFFQLMRV7uM17WMB2/exec';

    /**
     * Google Apps Script Web App URL sirf WhatsApp inquiry ke liye — ye alag
     * Google Sheet (1tuJowcjMlQ_oN6ZdsjJUtPyBXjzXjHv52tWp2f8QqsU) me data bhejta hai.
     */
    private $whatsappSheetUrl = 'https://script.google.com/macros/s/AKfycbx3G7iCvpnuFnA3SszKjF51XgKT5_HPr-ajPVkdNQNxhI8U8w7R997eQJR6Z9mCni8c/exec';

    /**
     * Apps Script me jo API key set hai, wahi yahan honi chahiye.
     */
    private $googleSheetApiKey = 'ctj84aP2fKxN2sW7vXzEyQh1vCmL6uGn5';

    /**
     * Common helper: kisi bhi form ka data Google Sheet me bhejne ke liye.
     * $sheetsData me 'inquiry_from' key hamesha honi chahiye taaki pata chale
     * ki inquiry kaunse form se aayi hai.
     *
     * @param array $sheetsData
     * @return void
     */
    private function sendToGoogleSheet(array $sheetsData, $url = null)
    {
        try {

            $targetUrl = $url ?? $this->googleSheetUrl;

            $sheetsData['apiKey'] = $this->googleSheetApiKey;

            $response = Http::withHeaders(['Content-Type' => 'application/json'])
                ->post($targetUrl, $sheetsData);

            if (! $response->successful()) {

                Log::error('Google Sheets request failed', [
                    'status'    => $response->status(),
                    'body'      => $response->body(),
                    'data_sent' => $sheetsData,
                ]);

            }

        } catch (\Exception $e) {

            Log::error('Google Sheets Exception: ' . $e->getMessage(), [
                'trace'     => $e->getTraceAsString(),
                'data_sent' => $sheetsData,
            ]);

        }

    }

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function login()
    {

        return view('auth.login');

    }

    public function admin()
    {

        return view('admin.admin');

    }

    public function index()
    {

        $title = "Solar Panel Manufacturer in India | Contendre Solar";

        $description = "Contendre Solar is a leading solar panel manufacturer in India, offering high-efficiency solar solutions for residential, commercial, and industrial needs.";

        $accessToken = env('INSTAGRAM_APP_TOKEN');

        $url = "https://graph.instagram.com/me/media?fields=id,caption,media_url,media_type,permalink&access_token={$accessToken}";

        $response = Http::get($url);

        $feed = $response->json()['data'] ?? [];

        $branddata = Brand::wherenull('deleted_at')->get();

        $oursolutiondata = OurSolution::whereNull('deleted_at')->get();

        $products = ProductCategory::wherenull('deleted_at')->get();

        $blogs = Blog::whereNull('deleted_at')->orderBy('created_at', 'desc')->take(3)->get();

        // return $blogs;

        return view('front.dashboard', compact('title', 'description', 'oursolutiondata', 'branddata', 'products', 'blogs', 'feed'));

    }

    public function contact()
    {

        $title = "Contact Contendre Solar | Solar Energy Experts in India";

        $description = "Get in touch with Contendre Solar for solar panel inquiries, project consultations, dealership opportunities, and expert renewable energy solutions.";

        $india = Country::where('name', 'India')->first();

        if (! $india) {

            abort(404, 'India not found in countries table.');

        }

        $indiaStateIds = State::where('country_id', $india->id)->pluck('id');

        $cities = City::whereIn('state_id', $indiaStateIds)->orderBy('name')->get();

        // return $cities;

        return view('front.contact', compact('title', 'description', 'cities'));

    }

    public function contactstore(Request $request)
    {

        $validated = $request->validate([

            'fullname'     => 'required|string',

            'email'        => 'required|email',

            'phone'        => 'required|numeric',

            'requirement'  => 'required',

            'organization' => 'required',

            'city'         => 'required',

            'message'      => 'nullable',

        ]);

        $post = new Contact;

        $post->fullname = $request->get('fullname');

        $post->email = $request->get('email');

        $post->phone = $request->get('phone');

        $post->requirement = $request->get('requirement');

        $post->organization = $request->get('organization');

        $post->city = $request->get('city');

        $post->message = $request->get('message') ?? '';

        $post->save();

        $contactData = [

            'fullname'     => $validated['fullname'],

            'email'        => $validated['email'],

            'phone'        => $validated['phone'],

            'requirement'  => $validated['requirement'],

            'organization' => $validated['organization'],

            'city'         => $validated['city'],

            'message'      => $validated['message'],

        ];

        $this->sendToGoogleSheet([

            'inquiry_from' => 'Contact Inquiry',

            'fullname'     => $validated['fullname'],

            'phone'        => $validated['phone'],

            'email'        => $validated['email'],

            'organization' => $validated['organization'],

            'requirement'  => $validated['requirement'],

            'city'         => $validated['city'],

            'message'      => $validated['message'] ?? '',

        ]);

        try {

            Mail::to($validated['email'])->send(new SendContactMailToUser($validated['fullname']));

            Mail::to(['sales@contendresolar.com'])->send(new SendContactMailToAdmin($contactData));

            return redirect()->route('thank.you')->with('success', 'Your message has been sent successfully!');

        } catch (\Exception $e) {

            Log::error('Email sending failed: ' . $e->getMessage());

            return back()->with('error', 'Failed to send the email. Please try again later.');

        }

        //return redirect()->route('thank.you')->with('success', 'Your message has been sent successfully.!');

    }

    public function whatsaapinquiry(Request $request)
    {
        $request->validate([
            'number'  => 'required|string|max:20',
            'message' => 'nullable|string|max:500',
        ]);

        WhatsappInquiry::create([
            'number'  => $request->number,
            'message' => $request->message,
        ]);

        $timestamp = Carbon::now()->format('Y-m-d H:i:s');

        $this->sendToGoogleSheet([
            'form_type' => 'whatsapp inquiry',
            'contact'   => $request->number,
            'message'   => $request->message,
            'date'      => $timestamp,
        ], $this->whatsappSheetUrl);

        $number      = '916358820089'; // your business WhatsApp number
        $message     = 'Inquiry from the website.';
        $whatsappUrl = 'https://wa.me/' . $number . '?text=' . urlencode($message);

        return back()->with('whatsapp_url', $whatsappUrl);
    }

    public function showCaptcha(Request $request)
    {

        $width = 150;

        $height = 60;

        // Generate random captcha text

        $characters = '0123456789'; // Only numbers like in your image

        $captcha_text = '';

        for ($i = 0; $i < 4; $i++) { // 4 digits like your example

            $captcha_text .= $characters[rand(0, strlen($characters) - 1)];

        }

        // Store captcha in session

        session(['captcha_code' => $captcha_text]);

        // Create ImageManager with GD driver

        $manager = ImageManager::gd();

        $img = $manager->create($width, $height)->fill('#f8f8f8'); // Light gray background

        // Add colorful background dots

        $colors = ['#f0dcdbff', '#ceebf5ff', '#daf1daff', '#c5c1adff', '#e7c5e7ff', '#b8b59bff', '#cab6afff'];

        for ($i = 0; $i < 80; $i++) {

            $color = $colors[array_rand($colors)];

            $x = rand(0, $width);

            $y = rand(0, $height);

            // Create small circles instead of single pixels

            $img->drawCircle($x, $y, function ($circle) use ($color) {

                $circle->radius(rand(1, 3));

                $circle->background($color);

            });

        }

        // Add some subtle gray dots for texture

        for ($i = 0; $i < 30; $i++) {

            $img->drawPixel(rand(0, $width), rand(0, $height), '#e0e0e0');

        }

        // Add some very light noise lines

        for ($i = 0; $i < 3; $i++) {

            $img->drawLine(function ($line) use ($width, $height) {

                $line->from(rand(0, $width), rand(0, $height))

                    ->to(rand(0, $width), rand(0, $height))

                    ->color('#eeeeee');

            });

        }

        // Add each digit with spacing like in your image

        $start_x = 20;

        $spacing = 35;

        for ($i = 0; $i < strlen($captcha_text); $i++) {

            $char = $captcha_text[$i];

            $x = $start_x + ($i * $spacing);

            // Add slight random offset for each character

            $offset_x = rand(-3, 3);

            $offset_y = rand(-2, 2);

            $img->text($char, $x + $offset_x, 35 + $offset_y, function ($font) {

                $font->filename(public_path('front/fonts/Roboto-Black.ttf'));

                $font->size(28);

                $font->color('#666666'); // Dark gray text

                $font->align('center');

                $font->valign('center');

            });

        }

        return $img->toPng();

    }

    public function verifyCaptcha(Request $request)
    {

        $userInput = $request->input('custom_captcha'); // value from input

        $captchaCode = session('captcha_code'); // value stored in session

        if ($userInput === $captchaCode) {

            return response()->json(['success' => true]);

        } else {

            return response()->json(['success' => false, 'message' => 'Captcha incorrect']);

        }

    }

    public function showConsultancy()
    {

        $title = "";

        $description = "";

        $india = Country::where('name', 'India')->first();

        if (! $india) {

            abort(404, 'India not found in countries table.');

        }

        $indiaStateIds = State::where('country_id', $india->id)->pluck('id');

        $cities = City::whereIn('state_id', $indiaStateIds)->orderBy('name')->get();

        // return $cities;

        return view('layouts.consultancyform', compact('title', 'description', 'cities'));

    }

    public function consultancystore(Request $request)
    {

        $validated = $request->validate([

            'name'     => 'required|string',

            'phone'    => 'required|numeric',

            'email'    => 'required|email',

            'kilowatt' => 'required',

            'qry'      => 'required',

            'city'     => 'nullable',

        ]);

        $post = new Consultancy;

        $post->name = $request->get('name');

        $post->phone = $request->get('phone');

        $post->email = $request->get('email');

        $post->kilowatt = $request->get('kilowatt');

        $post->qry = $request->get('qry');

        $post->city = $request->get('city');

        $post->save();

        $consultancyData = [

            'name'     => $validated['name'],

            'phone'    => $validated['phone'],

            'email'    => $validated['email'],

            'kilowatt' => $validated['kilowatt'],

            'qry'      => $validated['qry'],

            'city'     => $validated['city'] ?? '',

        ];

        $this->sendToGoogleSheet([

            'inquiry_from' => 'Consultancy Service Inquiry',

            'fullname'     => $validated['name'],

            'phone'        => $validated['phone'],

            'email'        => $validated['email'],

            'city'         => $validated['city'] ?? '',

            'query'        => $validated['qry'],

            'message'      => 'Kilowatt: ' . $validated['kilowatt'],

        ]);

        try {

            Mail::to($validated['email'])->send(new SendConsultancyMailToUser($validated['name']));

            Mail::to('info@contendresolar.com')->send(new SendConsultancyMailToAdmin($consultancyData));

            return redirect()->route('thank.you')->with('success', 'Your message has been sent successfully!');

        } catch (\Exception $e) {

            Log::error('Email sending failed: ' . $e->getMessage());

            return back()->with('error', 'Failed to send the email. Please try again later.');

        }

        // return redirect()->route('thank.you')->with('success', 'Your message has been sent successfully.!');

    }

    public function showService()
    {

        $india = Country::where('name', 'India')->first();

        if (! $india) {

            abort(404, 'India not found in countries table.');

        }

        $indiaStateIds = State::where('country_id', $india->id)->pluck('id');

        $cities = City::whereIn('state_id', $indiaStateIds)->orderBy('name')->get();

        // return $cities;

        return view('layouts.serviceform');

    }

    public function servicestore(Request $request)
    {

        $validated = $request->validate([

            'name'              => 'required|string',

            'email'             => 'required|email',

            'phone'             => 'required|numeric',

            'product_name'      => 'required',

            'modal_number'      => 'required',

            'city_installation' => 'nullable',

        ]);

        $post = new Service;

        $post->name = $request->get('name');

        $post->email = $request->get('email');

        $post->phone = $request->get('phone');

        $post->product_name = $request->get('product_name');

        $post->modal_number = $request->get('modal_number');

        $post->city_installation = $request->get('city_installation');

        $post->save();

        $serviceData = [

            'name'              => $validated['name'],

            'email'             => $validated['email'],

            'phone'             => $validated['phone'],

            'product_name'      => $validated['product_name'],

            'modal_number'      => $validated['modal_number'],

            'city_installation' => $validated['city_installation'] ?? '',

        ];

        $this->sendToGoogleSheet([

            'inquiry_from'         => 'Service Inquiry',

            'fullname'             => $validated['name'],

            'phone'                => $validated['phone'],

            'email'                => $validated['email'],

            'product_name'         => $validated['product_name'],

            'modal_number'         => $validated['modal_number'],

            'city_of_installation' => $validated['city_installation'] ?? '',

        ]);

        try {

            Mail::to($validated['email'])->send(new SendServiceMailToUser($validated['name']));

            Mail::to('info@contendresolar.com')->send(new SendServiceMailToAdmin($serviceData));

            return redirect()->route('thank.you')->with('success', 'Your message has been sent successfully!');

        } catch (\Exception $e) {

            Log::error('Email sending failed: ' . $e->getMessage());

            return back()->with('error', 'Failed to send the email. Please try again later.');

        }

        //   return redirect()->route('thank.you')->with('success', 'Your message has been sent successfully.!');

    }

    public function partnerstore(Request $request)
    {

        $validated = $request->validate([

            'name'            => 'required|string',

            'inquiryfor'      => 'required',

            'email'           => 'required|email',

            'phone'           => 'required|numeric',

            'currentbusiness' => 'required',

            'experience'      => 'required',

            'capacity'        => 'nullable',

        ]);

        $post = new ProductRequest;

        $post->name = $request->get('name');

        $post->inquiryfor = $request->get('inquiryfor');

        $post->email = $request->get('email');

        $post->phone = $request->get('phone');

        $post->currentbusiness = $request->get('currentbusiness');

        $post->experience = $request->get('experience');

        $post->capacity = $request->get('capacity');

        $post->save();

        $partnerData = [

            'name'            => $validated['name'],

            'inquiryfor'      => $validated['inquiryfor'],

            'email'           => $validated['email'],

            'phone'           => $validated['phone'],

            'currentbusiness' => $validated['currentbusiness'],

            'experience'      => $validated['experience'],

            'capacity'        => $validated['capacity'] ?? '',

        ];

        $this->sendToGoogleSheet([

            'inquiry_from'        => 'Partner/Ally Inquiry',

            'fullname'            => $validated['name'],

            'phone'               => $validated['phone'],

            'email'               => $validated['email'],

            'inquiry_for'         => $validated['inquiryfor'],

            'current_business'    => $validated['currentbusiness'],

            'years_of_experience' => $validated['experience'],

            'capacity'            => $validated['capacity'] ?? '',

        ]);

        try {

            Mail::to($validated['email'])->send(new SendPartnerMailToUser($validated['name']));

            Mail::to('info@contendresolar.com')->send(new SendPartnerMailToAdmin($partnerData));

            return redirect()->route('thank.you')->with('success', 'Your message has been sent successfully!');

        } catch (\Exception $e) {

            Log::error('Partner email sending failed: ' . $e->getMessage());

            return back()->with('error', 'Failed to send the email. Please try again later.');

        }

        //return redirect()->route('thank.you')->with('success', 'Your message has been sent successfully.!');

    }

    public function career()
    {

        $title = "Careers at Contendre Solar | Join the Renewable Future";

        $description = "Explore career opportunities at Contendre Solar and join a growing team dedicated to renewable energy, innovation, and sustainable growth.";

        return view('front.career', compact('title', 'description'));

    }

    public function careerstore(Request $request)
    {

        $validated = $request->validate([

            'name'     => 'required|string',

            'email'    => 'required|email',

            'number'   => 'required|numeric',

            'position' => 'required',

            'resume'   => 'required|file|mimes:doc,docx,pdf|max:5120',

            'message'  => 'nullable',

        ]);

        $post = new Career;

        $post->name = $request->get('name');

        $post->email = $request->get('email');

        $post->number = $request->get('number');

        $post->position = $request->get('position');

        $post->message = $request->get('message') ?? '';

        if ($request->hasFile('resume')) {

            $file = $request->file('resume');

            $fileName = $file->getClientOriginalName();

            $file->move(public_path('resumes'), $fileName);

            $post->resume = 'resumes/' . $fileName;

        }

        $post->save();

        $careerData = [

            'name'     => $validated['name'],

            'email'    => $validated['email'],

            'number'   => $validated['number'],

            'position' => $validated['position'],

            'message'  => $validated['message'] ?? '',

            'resume'   => $post->resume,

        ];

        $this->sendToGoogleSheet([

            'inquiry_from' => 'Career Inquiry',

            'fullname'     => $validated['name'],

            'phone'        => $validated['number'],

            'email'        => $validated['email'],

            'message'      => 'Position: ' . $validated['position'] . ' | ' . ($validated['message'] ?? ''),

        ]);

        try {

            Mail::to($validated['email'])->send(new SendCareerMailToUser($validated['name']));

            Mail::to(['hr@contendresolar.com'])->send(new SendCareerMailToAdmin($careerData));

            return redirect()->route('thank.you')->with('success', 'Your message has been sent successfully!');

        } catch (\Exception $e) {

            Log::error('Email sending failed: ' . $e->getMessage());

            return back()->with('error', 'Failed to send the email. Please try again later.');

        }

        //return redirect()->route('thank.you')->with('success', 'Your message has been sent successfully.!');

    }

    public function download()
    {

        $title = "Download Free Brochure, Product Datasheet & Certificate";

        $description = "Explore and download free resources for your solar project: datasheets, brochures, user manuals, certificates, warranty documents, and more. Access the information you need!";

        $categories = DownloadCategory::all();

        $downloads = Download::whereNull('deleted_at')->orderBy('created_at', 'desc')->get();

        return view('front.download', compact('title', 'description', 'categories', 'downloads'));

    }

    public function solarpanel()
    {

        $title = "Home Solar Panels in India | Reliable Residential Solutions";

        $description = "Looking for the best solar panel for home? Contendre Solar offers high-efficiency residential solar solutions for lower electricity bills and long-term savings";

        $faq = Faq::where('faq_url', 'solar-panel-for-home')->first();

        return view('front.solar-panel-for-home', compact('title', 'description', 'faq'));

    }

    public function video()
    {

        $title = "Solar Videos & Project Insights | Contendre Solar";

        $description = "Watch videos on solar technology, project installations, product showcases, industry trends, and renewable energy solutions by Contendre Solar.";

        $videos = Video::wherenull('deleted_at')->get();

        // return $videos;

        return view('front.video', compact('title', 'description', 'videos'));

    }

    public function ntype($url)
    {

        $certifications = Certificate::wherenull('deleted_at')->get();

        $productdetail = Product::with('keyfeature')->where('url', $url)->where('status', 'Active')->first();

        $title = $productdetail->meta_title;

        $description = $productdetail->meta_description;

        return view('front.n-type', compact('title', 'description', 'certifications', 'productdetail'));

    }

    public function ptype()
    {

        $title = "P-Type PERC Solar Panels | High-Efficiency Solar Modules";

        $description = "Explore Contendre Solar’s P-Type PERC solar panels — Advanced PERC technology, ideal for residential, commercial & industrial installations.";

        $certifications = Certificate::wherenull('deleted_at')->get();

        return view('front.p-type', compact('title', 'description', 'certifications'));

    }

    public function clients()
    {

        $title = "Trusted by Businesses Across India | Contendre Solar";

        $description = "Discover the clients and partners who trust Contendre Solar for reliable solar solutions, quality products, and sustainable energy projects.";

        $clients = Client::wherenull('deleted_at')->get();

        return view('front.client', compact('title', 'description', 'clients'));

    }

    public function milestone()
    {

        $title = "Growth, Innovation & Success | Contendre Solar Milestones";

        $description = "Explore Contendre Solar's journey of innovation, key achievements, industry recognition, business growth, and expansion in solar energy solutions.";

        $milestones = Milestone::orderBy('year')->get();

        return view('front.milestone', compact('title', 'description', 'milestones'));

    }

    public function bipvSolution()
    {

        $title = "BIPV Solar Solutions for Modern Buildings | Contendre Solar";

        $description = "Integrate solar power into building design with BIPV solutions from Contendre Solar. Enhance energy efficiency and sustainable architecture.";

        return view('front.bipv-solution', compact('title', 'description'));

    }

    public function commercialIndustrial()
    {

        $faq = Faq::where('faq_url', 'commercial-and-industrial-solar')->first();

        $title = "Commercial & Industrial Solar Solutions | Contendre Solar";

        $description = "Boost business efficiency with commercial and industrial solar solutions from Contendre Solar. Reduce energy costs with reliable solar power.";

        return view('front.comm-inds-solution', compact('title', 'description', 'faq'));

    }

    public function utilityScale()
    {

        $title = "Utility Scale Solar Solutions for Large Projects | Contendre Solar";

        $description = "Build high-performance utility scale solar projects with Contendre Solar. We deliver end-to-end EPC, construction, commissioning, and O&M solutions across India";

        return view('front.utility_scale', compact('title', 'description'));

    }

    public function productAlly()
    {

        $title = "Contendre Solar Ally Program | Solar Distributor in India";

        $description = "Become a Contendre Solar Ally and grow your solar business in India with premium products, partner training, marketing, and dealer support";

        $products = ProductCategory::wherenull('deleted_at')->get();

        return view('front.product_ally', compact('title', 'description', 'products'));

    }

    public function projectAlly()
    {

        $title = "Solar Projects Portfolio | Successful Installations India";

        $description = "Discover solar projects delivered by Contendre Solar across residential, commercial, industrial, and utility-scale sectors nationwide.";

        return view('front.project_ally', compact('title', 'description'));

    }

    public function channelSales()
    {

        $title = "Become a Solar Dealer & Distributor in India | Contendre Solar";
        $description = "Partner with Contendre Solar as a dealer or distributor. Get product training, marketing support, and technical backing to grow your solar business in India.";

        $products = ProductCategory::whereNull('deleted_at')->get();

        $branddata = Brand::whereNull('deleted_at')->get();
        
        $faq = Faq::where('faq_url', 'channel-sales')->first();

        return view('front.channel-sales', compact('title', 'description', 'products', 'branddata', 'faq'));

    }

    public function epc()
    {
        $title = "Solar EPC Company in India | Turnkey Solutions | Contendre Solar";
        $description = "Contendre Solar delivers end-to-end EPC design, procurement, installation, testing, and O&M for residential, commercial, industrial, and utility-scale projects";

        $faq = Faq::where('faq_url', 'epc')->first();

        return view('front.epc', compact('title', 'description', 'faq'));

    }
    public function whitelabel()
    {
        $title = "Solar EPC Company in India | Turnkey Solutions | Contendre Solar";
        $description = "Contendre Solar delivers end-to-end EPC design, procurement, installation, testing, and O&M for residential, commercial, industrial, and utility-scale projects";

        $faq = Faq::where('faq_url', 'white-labeling-oem-solar-manufacturing')->first();

        return view('front.white-labeling-oem-solar-manufacturing', compact('title', 'description', 'faq'));

    }

    public function solarDeveloper()
    {
        $title = "Solar Panel Supplier for Developers | Contendre Solar";
        $description = "Contendre Solar supplies BIS, IEC, and ALMM-certified bankable modules for commercial, industrial, ground-mount, and utility-scale solar developers across India";
        $faq = Faq::where('faq_url', 'solar-developer')->first();
        $products = ProductCategory::wherenull('deleted_at')->get();
        
        return view('front.solar-developer', compact('title', 'description', 'faq', 'products'));

    }
    
     public function commercialIndustrialSolutions()
    {
        $title = "Commercial & Industrial Solar Panels India | Contendre Solar";
        $description = "Cut electricity costs up to 70% with Contendre Solar's Commercial & Industrial rooftop systems - custom-designed for factories, warehouses, and offices";
        $faq = Faq::where('faq_url', 'commercial-industrial-solutions')->first();
        return view('front.commercial-industrial-solution', compact('title', 'description', 'faq'));
    }

    public function allyLocater()
    {

        $title = "Find Solar Partners & Installers Near You | Contendre";

        $description = "Find authorized Contendre Solar dealers, distributors, and installation partners near you for trusted products and expert solar support.";

        return view('front.ally_locater', compact('title', 'description'));

    }

    public function news()
    {

        $title = "Solar Industry News & Company Updates | Contendre Solar";

        $description = "Stay updated with the latest solar industry news, company announcements, product launches, and renewable energy developments from Contendre Solar.";

        $news = News::orderBy('date', 'desc')->get();

        return view('front.news', compact('title', 'description', 'news'));

    }

    public function thankyou()
    {

        $title = "";

        $description = "";

        return view('front.thank-you', compact('title', 'description'));

    }

    public function solarmanufacture()
    {

        $title = "Leading Solar Module Manufacturer for Clean Energy Solutions";

        $description = "Explore advanced solar modules from Contendre Solar, designed for reliable performance, higher energy output, and sustainable power generation.";

        $gallery = Gallery::all();

        $faq = Faq::where('faq_url', 'solar-manufacturing')->first();

        return view('front.manufacturing', compact('title', 'description', 'gallery', 'faq'));

    }

    public function terms()
    {

        $title = "Terms of Use | Website Access & Legal Information";

        $description = "Read Contendre Solar's Terms of Use to understand website access, user responsibilities, service conditions, and legal requirements.";

        return view('front.tearms_condtion', compact('title', 'description'));

    }

    public function privacy()
    {

        $title = "Privacy Policy | Data Protection & User Information";

        $description = "Review Contendre Solar's Privacy Policy to understand how we collect, use, store, and protect your personal information securely.";

        return view('front.privacy_policy', compact('title', 'description'));

    }

    public function aboutSolar()
    {

        $title = "Sustainability Commitment | Building a Greener Future";

        $description = "Learn how Contendre Solar promotes sustainability through clean energy innovation, responsible manufacturing, and eco-friendly practices.";

        $ourexperts = OurExpert::all();

        return view('front.about-solar', compact('title', 'description', 'ourexperts'));

    }

    public function aboutus()
    {

        $title = "About us - Contendre Solar | India's top solar product seller";

        $description = "Contendre Solar offers customized solar panels, innovative module products, and comprehensive services like EPC and OEM. Experience top-quality smart solar solutions.";

        $boardmember = BoardMember::where('status', 'Active')->get();

        return view('front.overview', compact('boardmember', 'title', 'description'));

    }

    public function distributor()
    {

        $title = "Become a Solar Distributor Partner | Contendre Solar";

        $description = "Partner with Contendre Solar as a distributor and expand your business with quality solar products, support, and growth opportunities.";

        return view('front.distributor', compact('title', 'description'));

    }

    public function storeDistributor(Request $request)
    {

        $validated = $request->validate([

            'company_name'                            => 'required|string|max:255',

            'company_business'                        => 'required|string|max:255',

            'company_email'                           => 'required|email',

            'company_address'                         => 'required|string|max:500',

            'company_number'                          => 'required|string|max:50',

            'company_website'                         => 'required|url',

            'officephone'                             => 'nullable|string|max:50',

            'pannumber'                               => ['required', 'regex:/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/'], // PAN format

            'gstnumber'                               => ['required', 'regex:/^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[A-Z0-9]{1}Z[0-9A-Z]{1}$/'], // GST format

            'distributor_services'                    => 'required|string|max:255',

            'area'                                    => 'required|string|max:255',

            'applicant_name'                          => 'required|string|max:255',

            'designation'                             => 'required|string|max:255',

            'other_owners_directors_partners_details' => 'required|string|max:500',

            'applicant_number'                        => ['required', 'regex:/^\d{10}$/'],

            'applicant_residence_address'             => 'required|string|max:500',

            //'is_approve' => 'accepted', // terms checkbox

            // Add captcha validation on your side as needed

        ]);

        $post = new Distributors();

        $post->company_name = $validated['company_name'];

        $post->company_business = $validated['company_business'];

        $post->company_email = $validated['company_email'];

        $post->company_address = $validated['company_address'];

        $post->company_number = $validated['company_number'];

        $post->company_website = $validated['company_website'];

        $post->officephone = $request->input('officephone'); // optional

        $post->pannumber = $validated['pannumber'];

        $post->gstnumber = $validated['gstnumber'];

        $post->distributor_services = $validated['distributor_services'];

        $post->area = $validated['area'];

        $post->applicant_name = $validated['applicant_name'];

        $post->designation = $validated['designation'];

        $post->other_owners_directors_partners_details = $validated['other_owners_directors_partners_details'];

        $post->applicant_number = $validated['applicant_number'];

        $post->applicant_residence_address = $validated['applicant_residence_address'];

        $post->save();

        $distributorData = [

            'company_name'                            => $validated['company_name'],

            'company_business'                        => $validated['company_business'],

            'company_email'                           => $validated['company_email'],

            'company_address'                         => $validated['company_address'],

            'company_number'                          => $validated['company_number'],

            'company_website'                         => $validated['company_website'],

            'officephone'                             => $request->input('officephone'),

            'pannumber'                               => $validated['pannumber'],

            'gstnumber'                               => $validated['gstnumber'],

            'distributor_services'                    => $validated['distributor_services'],

            'area'                                    => $validated['area'],

            'applicant_name'                          => $validated['applicant_name'],

            'designation'                             => $validated['designation'],

            'other_owners_directors_partners_details' => $validated['other_owners_directors_partners_details'],

            'applicant_number'                        => $validated['applicant_number'],

            'applicant_residence_address'             => $validated['applicant_residence_address'],

        ];

        $this->sendToGoogleSheet([

            'inquiry_from' => 'Distributor Inquiry',

            'company_name' => $validated['company_name'],

            'fullname'     => $validated['applicant_name'],

            'phone'        => $validated['applicant_number'],

            'email'        => $validated['company_email'],

            'organization' => $validated['company_business'],

            'message'      => 'Designation: ' . $validated['designation'] . ', Area: ' . $validated['area'] .
                               ', PAN: ' . $validated['pannumber'] . ', GST: ' . $validated['gstnumber'],

        ]);

        try {

            Mail::to($validated['company_email'])->send(new SendDistributorMailToUser($validated['company_name']));

            Mail::to('info@contendresolar.com')->send(new SendDistributorMailToAdmin($distributorData));

            return redirect()->route('thank.you')->with('success', 'Your message has been sent successfully!');

        } catch (\Exception $e) {

            Log::error('Distributor email sending failed: ' . $e->getMessage());

            return back()->with('error', 'Failed to send the email. Please try again later.');

        }

        // return redirect()->route('locater.ally')->with('success', 'Your message has been sent successfully!');

    }

}
