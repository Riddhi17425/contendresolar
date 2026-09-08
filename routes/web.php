<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\BoardMemberController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CertificateController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\DownloadCategoryController;
use App\Http\Controllers\Admin\DownloadController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\HiroSectionController;
use App\Http\Controllers\Admin\KeyFeaturesController;
use App\Http\Controllers\Admin\MilestoneController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\OurExpertController;
use App\Http\Controllers\Admin\OurSolutionController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\VideoModuleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontBlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\superAdminController;
use App\Http\Controllers\usersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [DashboardController::class, 'index'])->name('front.home');
Route::get('/solar-panel-for-home', [DashboardController::class, 'solarpanel'])->name('solar.panel.for.home');
Route::get('/contact-us', [DashboardController::class, 'contact'])->name('contact.us');
Route::post('/contact-submit', [DashboardController::class, 'contactstore'])->name('contact.submit');

Route::post('/whatsapp-inquiry', [DashboardController::class, 'whatsaapinquiry'])->name('whatsaapinquiry');

Route::get('/captcha-image', [DashboardController::class, 'showCaptcha'])->name('captcha.image');
Route::post('/verify-captcha', [DashboardController::class, 'verifyCaptcha'])->name('captcha.verify');

Route::post('/consultancy-submit', [DashboardController::class, 'consultancystore'])->name('consultancy.submit');
Route::post('/service-submit', [DashboardController::class, 'servicestore'])->name('service.submit');
Route::post('/partner-submit', [DashboardController::class, 'partnerstore'])->name('partner.submit');

Route::get('/career', [DashboardController::class, 'career'])->name('career');
Route::post('/career-submit', [DashboardController::class, 'careerstore'])->name('career.submit');
Route::get('/downloads', [DashboardController::class, 'download'])->name('downloads');
Route::get('/product/{url}', [DashboardController::class, 'ntype'])->name('n.type');
Route::get('/p-type', [DashboardController::class, 'ptype'])->name('p.type');
Route::get('/videos', [DashboardController::class, 'video'])->name('front.video');
Route::get('/clientele', [DashboardController::class, 'clients'])->name('clientele');
Route::get('/milestone', [DashboardController::class, 'milestone'])->name('milestone');
Route::get('/bipv-solution', [DashboardController::class, 'bipvSolution'])->name('bipv.solution');
Route::get('/commercial-and-industrial-solar', [DashboardController::class, 'commercialIndustrial'])->name('commercial.and.industrial.solar');
Route::get('/utility-scale', [DashboardController::class, 'utilityScale'])->name('utility.scale');
Route::get('/product-ally', [DashboardController::class, 'productAlly'])->name('product.ally');
Route::get('/project-ally', [DashboardController::class, 'projectAlly'])->name('project.ally');
Route::get('/channel-sales', [DashboardController::class, 'channelSales'])->name('channel.sales');
Route::get('/epc', [DashboardController::class, 'epc'])->name('epc');
Route::get('/solar-developer', [DashboardController::class, 'solarDeveloper'])->name('solar.developer');
Route::get('/locater-ally', [DashboardController::class, 'allyLocater'])->name('locater.ally');
Route::get('/news-list', [DashboardController::class, 'news'])->name('news');
Route::get('/solar-panel-manufacturer', [DashboardController::class, 'solarmanufacture'])->name('solar.panel.manufacturer');
Route::get('/overview', [DashboardController::class, 'aboutus'])->name('overview');
Route::get('/sustainability', [DashboardController::class, 'aboutSolar'])->name('sustainability');

Route::get('/distributor', [DashboardController::class, 'distributor'])->name('distributor');
Route::post('/distributor-submit', [DashboardController::class, 'storeDistributor'])->name('distributor.submit');

//darshan work
Route::get('/blog', [FrontBlogController::class, 'index'])->name('front.blog');
Route::get('/blog/{url}', [FrontBlogController::class, 'BlogDetails'])->name('front.blog.details');

Route::get('/thank-you', [DashboardController::class, 'thankyou'])->name('thank.you');

Route::get('/login', [DashboardController::class, 'login'])->name('login');
Route::get('/terms-of-use', [DashboardController::class, 'terms'])->name('terms.of.use');
Route::get('/privacy-policy', [DashboardController::class, 'privacy'])->name('privacy.policy');
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/user', [usersController::class, 'user'])->name('user');
    Route::get('/admin/dashboard', [DashboardController::class, 'admin'])->name('/admin/dashboard');
    Route::get('/superAdmin', [superAdminController::class, 'superAdmin'])->name('superAdmin');
    Route::get('/admin/dashboard', [AdminController::class, 'admin'])->name('admin/dashboard');

    Route::resource('admin/client', ClientController::class);
    Route::resource('admin/brand', BrandController::class);
    Route::resource('admin/oursolution', OurSolutionController::class);
    Route::resource('admin/faq', FaqController::class);
    Route::resource('admin/blog', BlogController::class);
    Route::resource('admin/downloadcategory', DownloadCategoryController::class);
    Route::resource('admin/download', DownloadController::class);
    Route::resource('admin/milestone', MilestoneController::class);
    Route::resource('admin/certificate', CertificateController::class);
    Route::resource('admin/gallery', GalleryController::class);
    Route::resource('admin/ourexpert', OurExpertController::class);
    Route::resource('admin/news', NewsController::class);
    Route::resource('admin/keyfeature', keyFeaturesController::class);
    Route::resource('admin/productcategory', ProductCategoryController::class);

    Route::get('admin/hiro-section', [HiroSectionController::class, 'index'])->name('hiro.section');
    Route::get('admin/hiro-section/create', [HiroSectionController::class, 'create'])->name('hiro.section.create');
    route::post('admin/hiro-section/store', [HiroSectionController::class, 'store'])->name('hirosection.store');
    route::get('admin/hiro-sectionData', [HiroSectionController::class, 'getHiroSectionData'])->name('getHiroSectionData');
    route::get('admin/hiro-section/edit/{id}', [HiroSectionController::class, 'edit'])->name('hiro.section.edit');
    route::post('admin/hiro-section/update/{id}', [HiroSectionController::class, 'update'])->name('hirosection.update');
    route::delete('admin/hiro-section/delete/{id}', [HiroSectionController::class, 'destroy'])->name('hirosection.delete');

    // video module
    Route::get('/video', [VideoModuleController::class, 'index'])->name('admin.video');
    Route::get('/add-video', [VideoModuleController::class, 'create'])->name('admin.createVideo');
    Route::POST('/add-video', [VideoModuleController::class, 'Store'])->name('admin.video.store');
    Route::post('/upload-video-chunk', [VideoModuleController::class, 'chunkUpload'])->name('admin.video.chunkUpload');
    route::get('/getVideoData', [VideoModuleController::class, 'getVideoData'])->name('admin.getVideoData');
    route::get('/video-edit/{id}', [VideoModuleController::class, 'Edit'])->name('admin.video.edit');
    route::post('/video-update/{id}', [VideoModuleController::class, 'Update'])->name('admin.video.update');
    route::delete('/video-delete/{id}', [VideoModuleController::class, 'Destory'])->name('admin.video.delete');

    // board member
    Route::get('admin/board-member', [BoardMemberController::class, 'index'])->name('boardmember');
    Route::get('admin/board-member/create', [BoardMemberController::class, 'create'])->name('boardmember.create');
    route::post('admin/board-member/store', [BoardMemberController::class, 'store'])->name('boardmember.store');
    route::get('admin/board-member-Data', [BoardMemberController::class, 'getBoardMemberData'])->name('getBoardmemberData');
    route::get('admin/board-member/edit/{id}', [BoardMemberController::class, 'edit'])->name('boardmember.edit');
    route::post('admin/board-member/update/{id}', [BoardMemberController::class, 'update'])->name('boardmember.update');
    route::delete('admin/board-member/delete/{id}', [BoardMemberController::class, 'destroy'])->name('boardmember.delete');

    //products
    Route::get('admin/product', [ProductController::class, 'index'])->name('product');
    Route::get('admin/product/create', [ProductController::class, 'create'])->name('product.create');
    route::post('admin/product/store', [ProductController::class, 'store'])->name('product.store');
    route::get('admin/product-Data', [ProductController::class, 'getProductData'])->name('getProductData');
    route::get('admin/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    route::post('admin/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
    route::delete('admin/product/delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');
});
