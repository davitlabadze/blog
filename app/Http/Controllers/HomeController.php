<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\Event\ViewEvent;

class HomeController extends Controller
{
    function index(Request $request){
    	
    	if($request->has('q')){
    		$q=$request->q;
    		$posts=Post::where('title','like','%'.$q.'%')->orderBy('id','desc')->paginate(2);
    	}else{
    		$posts=Post::orderBy('id','desc')->paginate(20);
    	}
        return view('frontend.home',['posts'=>$posts]);
    }
    // Post Detail
    function detail(Request $request,$slug,$postId){
        // Update post count
        // Post::find($postId)->increment('views');
    	$detail=Post::find($postId);
    	return view('frontend.detail',['detail'=>$detail]);
    }
	// All Categories
    function all_category(){
        $categories=Category::orderBy('id','desc')->paginate(9);
        return view('frontend.categories',['categories'=>$categories]);
    }
	
	 // All posts according to the category
	 function category(Request $request,$cat_slug,$cat_id){
        $category=Category::find($cat_id);
        $posts=Post::where('cat_id',$cat_id)->orderBy('id','desc')->paginate(2);
        return view('frontend.category',['posts'=>$posts,'category'=>$category]);
    }

	
}