<?php

namespace App\Http\Controllers\Front;

use App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use TCG\Voyager\Facades\Voyager;
use View;
use App\Traits\Language;
use App\Helpers\Helper;
// use Webpatser\Uuid\Uuid;
use Illuminate\Support\Facades\Cache;

use TCG\Voyager\Models\Category as Category;
use TCG\Voyager\Models\Page as Page;
use TCG\Voyager\Models\Post as Post;

use App\Models\Social;
use App\Models\Partner;
use App\Models\Link;
use App\Models\Benefit;
use App\Models\Banner;
use App\Models\Request as Req;

class HomeController extends Controller
{
    private $per_page=6;
    private $post_per_home=5;
    private $banner_per_home=3;
    private $cache_minutes=1;
    
    public function __construct() {
       $latest_posts=Post::withTranslations(App::getLocale())->orderBy('created_at','desc')->limit(2)->get();
       $links=Link::all();
       View::share ([
           'socials'=>Social::withTranslations(App::getLocale())->get(),
           'is_rtl'=>Helper::isRtl(),
           'latest_posts'=>$latest_posts,
           'links'=>$links
           ]);
    }
    
   
    public function home_page(){
        $benefits=Benefit::withTranslations(App::getLocale())->get();
        $posts=Post::withTranslations(App::getLocale())->orderBy('created_at','desc')->limit($this->post_per_home)->get();
        $banners=Banner::withTranslations(App::getLocale())->limit($this->banner_per_home)->get();
        $partners=Partner::all();
        $department = Cache::remember('categories'.App::getLocale(), $this->cache_minutes, function (){
            $categories=Category::with('children')->withTranslations(App::getLocale())->get();
            return view('front.home.includes.department',compact(['categories']))->render();
        });
        return view('front.home.home',compact(['benefits','posts','banners','department','partners']));
    }
    
    
    public function pages_show($slug){
        $page=Page::where('slug',$slug)->firstOrFail();
        if (view()->exists('front.pages.'.$slug.'.index')) {
            return view('front.pages.'.$slug.'.index',compact('page'));
        } else {
            return view('front.pages.page.index',compact('page'));
        }
    }
    
    
    public function blog_index(){
        $posts=Post::with('authorId')->withTranslations(App::getLocale())->paginate($this->per_page);
        return view('front.blog.index',compact('posts'));
    }
    public function blog_show(Post $post, $slug){
        return view('front.blog.show',compact('post'));
    }
    
    
    public function category_show(Category $category, $slug){
        return view('front.service.index',compact('category'));
    }
    public function category_request(Request $request){
        Req::create($request->all());
        
        return redirect()->back()->with([
            'message'=>trans('messages.success_created'),
            'alert-type'=>'success'
        ]);
    }
    
    
    
    public function local_switch($local){
         return redirect($local);
    }
    
    public function test(){
        $post=Post::first();
        
        return $post->thumbnail('small');
        // return Uuid::generate();
        $slug='lorem-ipsum-post-trans';
        $post=Post::withTranslations()->where(function ($query) use($slug) {
                dd($query);
            })
            ->get();
        return $post->getTranslatedAttribute('slug');
        // return App::getLocale();
        $categories= Category::withTranslations()->get();
        $menu = Cache::remember('menu'.App::getLocale(), 1, function () use ($categories) {
            
            return menu('front','front.common.menu',['categories'=>$categories]);
        });
        return $menu;
       
       return $categories;
        // dd($categories);
       return view('home',compact('categories')); 
    }
}
            