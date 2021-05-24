<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\BaseController;
use App\Models\Asset;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Info;
use App\Models\Product;
use App\Models\Reservation;
use App\Models\Script;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Http\Request;

use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;


class FrontendController extends BaseController
{
    // home page --------------------------------------------
    public function home()
    {
        SEOTools::setTitle('Home - Thoplo Machine');
        SEOTools::setDescription('Home page of Thopolo Machine PVT LTD');
        SEOTools::opengraph()->setUrl('http://thoplo.com');
        SEOTools::setCanonical('https://thoplo.com');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@thoplo');
        SEOTools::jsonLd()->addImage('https://thoplo.com.br/img/logo.jpg');


        $slider = Slider::all();
        $map = Asset::take(1)->where('type', 'map')->get();
        $menu_image = Asset::take(1)->where('type', 'menu_image')->first();
        $menu_file = Asset::take(1)->where('type', 'menu_file')->first();
        $blogs = Blog::take(8)->orderBy('id', 'desc')->get();

        $category = Category::take(6)->get();
        $script = Script::all();

        $blog = Blog::orderBy('id', 'desc')->take(4)->get();

        // $product = Product::all();

        // dd($services->all());

        return view('frontend.index', [
            'slider' => $slider,
            'map' => $map,
            'blogs' => $blogs,
            'script' => $script,
            'category' => $category,
            'blog' => $blog,
            'menu_image' => $menu_image,
            'menu_file' => $menu_file,
        ]);
    }

    public function reservation()
    {
        return view('frontend_pages.services.reservation', [

        ]);

    }

    public function Menu()
    {
        $category = Category::take(6)->get();

        return view('frontend_pages.menu.menu', [
            'category' => $category,
        ]);

    }

    public function MenuCategoryView($slug)
    {
        $category = Category::take(6)->get();
        $cat_id = Category::where('slug', $slug)->first();
        return view('frontend_pages.menu.menu-category', [
            'slug' => $slug,
            'cat_id' => $cat_id->id,
            'category' => $category,
        ]);

    }

    // blog details page --------------------------------
    public function BlogDetail($slug)
    {
        $b = Blog::where('slug', $slug)->take(1)->get();
        $related = Blog::where('category_id', $b[0]->category_id)->take(4)->get();
        $recent = Blog::take(6)->orderBy('id', 'desc')->whereNotIN('slug', [$b[0]->slug])->get();

        $blog = $b[0];


        SEOMeta::setTitle($blog->title);
        SEOMeta::setDescription($blog->description);
        SEOMeta::addMeta('article:published_time', $blog->created_at->toW3CString(), 'property');
        SEOMeta::addMeta('article:section', $blog->category->name, 'property');
        SEOMeta::addKeyword(['blog1', 'blog1', 'key3']);

        OpenGraph::setDescription($blog->description);
        OpenGraph::setTitle($blog->title);
        OpenGraph::setUrl('http://current.url.com');
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('locale', 'pt-br');
        OpenGraph::addProperty('locale:alternate', ['pt-pt', 'ns']);

        // OpenGraph::addImage($blog->cover->url);
        // OpenGraph::addImage($blog->image->list('url'));
        OpenGraph::addImage(['url' => 'http://image.url.com/cover.jpg', 'size' => 300]);
        OpenGraph::addImage('http://image.url.com/cover.jpg', ['height' => 300, 'width' => 300]);

        JsonLd::setTitle($blog->title);
        JsonLd::setDescription($blog->description);
        JsonLd::setType('Article');
        // JsonLd::addImage($blog->image->list('url'));


        return view('frontend.pages.blog.blog-details', [
            'blog' => $blog,
            'related' => $related,
            'recent' => $recent,
        ]);
    }

    // blog category page
    public function blogCategory($category)
    {

        $blog = Blog::where('category', $category)->where('featured', 1)
            ->orderBy('id', 'desc')->take(3)->get();
        // dd($main_category);
        return view('frontend_pages.blog.blog-category', [
            'blog' => $blog,
            'category' => $category,
        ]);
    }

    // blog category page
    public function getBlogByCategory(Request $request)
    {
        $last_id = $request->last_id;

        if ($request->last_id == 0) {
            $last = Blog::orderBy('id', 'desc')->first();
            $last_id = $last->id;
        }

        // dd($request);
        $blog = Blog::where('category', $request->category)
            ->where('id', '<', $last_id)
            ->orderBy('id', 'desc')
            ->take(6)->get();
        // dd($blog);
        return json_encode($this->reportSuccess('Data retrived Successfully', $blog));
    }

    public function Blog()
    {
        SEOTools::setTitle('Blog Page');
        SEOTools::setDescription('All blogs lists');
        SEOTools::opengraph()->setUrl('http://thoplomachine.com');
        SEOTools::setCanonical('https://thoplomachine.com/blog');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@thoplomachine');
        SEOTools::jsonLd()->addImage('https://codecasts.com.br/img/logo.jpg');

        $blog = Blog::with('category')->orderBy('id', 'desc')->get();
        return view('frontend.pages.blog.index', compact('blog'));
    }

    public function about()
    {
        return view('frontend_pages.about', [

        ]);
    }

    // our team
    public function ourteam() {

        SEOTools::setTitle('Team - Thoplomachine');
        SEOTools::setDescription('Our Team');
        SEOTools::opengraph()->setUrl('http://thoplomachine.com');
        SEOTools::setCanonical('https://thoplomachine.com/our-team');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@thoplomachine');
        SEOTools::jsonLd()->addImage('https://codecasts.com.br/img/logo.jpg');

        return view('frontend.pages.ourteam');
    }

    // info pages like - about us , terms and conditions-------------------
    public function infos($slug)
    {
        $i = Info::where('slug', $slug)->take(1)->get();
        if (count($i) != 0) {
            $infos = $i[0];
            return view('frontend_pages.infos', [
                'infos' => $infos,

            ]);
        } else {
            return redirect('/');
        }

    }

    // get logged in user details
    public function getLoggedUser()
    {
        if (auth()->check()) {
            $user = User::where('id', auth()->user()->id)
                ->select('email', 'phone', 'name')
                ->first();
            return json_encode($this->reportSuccess('Seat Booked Successfully. We will contact you soon. Thank you.', $user));
        }
    }

    // saving contact details --------------------------
    public function saveReservation(Request $request)
    {
        // dd($request->all());
        $validate = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email',
            'phone' => 'required|string',
            'date' => 'required|string',
            'time' => 'required|string',
            'message' => 'required|string',
            'persons' => 'required|integer',
        ]);

        $store = new Reservation();
        $store->name = $request->name;
        $store->phone = $request->phone;
        $store->email = $request->email;
        $store->date = $request->date;
        $store->time = $request->time;
        $store->persons = $request->persons;
        $store->message = $request->message;
        $store->save();
        if ($store) {
            return json_encode($this->reportSuccess('Seat Booked Successfully. We will contact you soon. Thank you.'));

        } else {
            return json_encode($this->reportError('Failed to Book Seat. Please try again'));
        }

    }

    // contact page
    public function contact()
    {

        SEOTools::setTitle('Contact Us - Thoplo Machine');
        SEOTools::setDescription('Contact Address of Thoplo Machine');
        SEOTools::opengraph()->setUrl('http://thoplo.com');
        SEOTools::setCanonical('https://thoplo.com/contact');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@thoplo');
        SEOTools::jsonLd()->addImage('https://thoplo.com.br/img/logo.jpg');

        $map = Asset::where('type', 'map')->first();

        return view('frontend.pages.contactus', [
            'map' => $map,
        ]);
    }

    // saving contact details --------------------------
    public function saveContact(Request $request)
    {
        // dd($request->all());
        $validate = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string',
            'message' => 'required|string',
        ]);

        $store = new Contact();
        $store->name = $request->name;
        $store->phone = $request->phone;
        $store->email = $request->email;
        $store->message = $request->message;
        $store->save();
        if ($store) {
            return json_encode($this->reportSuccess('Message sent Successfully. Our team will contact you soon.'));

        } else {
            return json_encode($this->reportError('Message send failed. Please try again'));
        }
    }

    public function faqs()
    {
        SEOTools::setTitle('Faqs - Thoplo Machine');
        SEOTools::setDescription('faqs');
        SEOTools::opengraph()->setUrl('http://thoplo.com');
        SEOTools::setCanonical('https://thoplo.com/faqs');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@thoplo');
        SEOTools::jsonLd()->addImage('https://thoplo.com.br/img/logo.jpg');

        return view('frontend.pages.faqs');
    }



}
