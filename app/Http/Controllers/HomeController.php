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
        return view('home',['posts'=>$posts]);
    }
    // Post Detail
    function detail(Request $request,$slug,$postId){
        // Update post count
        Post::find($postId)->increment('views');
    	$detail=Post::find($postId);
    	return view('detail',['detail'=>$detail]);
    }
	// All Categories
    function all_category(){
        $categories=Category::orderBy('id','desc')->paginate(9);
        return view('categories',['categories'=>$categories]);
    }
	
	 // All posts according to the category
	 function category(Request $request,$cat_slug,$cat_id){
        $category=Category::find($cat_id);
        $posts=Post::where('cat_id',$cat_id)->orderBy('id','desc')->paginate(2);
        return view('category',['posts'=>$posts,'category'=>$category]);
    }

	//Save Comment
	public function save_comment(Request $request,$slug,$id)
	{
		$request->validate([
			'comment' => 'required'
		]);
		$data= new Comment;
		$data->user_id = $request->user()->id;
		$data->post_id = $id;
		$data->comment = $request->comment;
		$data->save();
		
		return redirect('detail/'.$slug.'/'.$id)->with('success','Comment has been submited!');

	}
	
	// User submit post
	function save_post_form(){
		$cats=Category::all();
		return view('save-post-form',['cats'=>$cats]);
	}

	 // Save Data
	 function save_post_data(Request $request){
        $request->validate([
            'title'=>'required',
            'category'=>'required',
            'detail'=>'required',
			'tags'=>'required',
        ]);

        // Post Thumbnail
        if($request->hasFile('post_thumb')){
            $image1=$request->file('post_thumb');
            $reThumbImage=time().'.'.$image1->getClientOriginalExtension();
            $dest1=public_path('/imgs/thumbimg');
            $image1->move($dest1,$reThumbImage);
        }else{
            $reThumbImage='na';
        }

        // Post Full Image
        if($request->hasFile('post_image')){
            $image2=$request->file('post_image');
            $reFullImage=time().'.'.$image2->getClientOriginalExtension();
            $dest2=public_path('/imgs/fullimg');
            $image2->move($dest2,$reFullImage);
        }else{
            $reFullImage='na';
        }

        $post=new Post;
        $post->user_id=$request->user()->id;
        $post->cat_id=$request->category;
        $post->title=$request->title;
        $post->thumb=$reThumbImage;
        $post->full_img=$reFullImage;
        $post->detail=$request->detail;
        $post->tags=$request->tags;
        $post->status=1;
        $post->save();

        return redirect('save-post-form')->with('success','Post has been added');
    }

 

    public function user_account(Request $request)
    {
        $users = User::where('id',$request->user()->id)->get();

        // Number of posts added by the user
        $user = auth()->user()->id;
        $count_posts = Post::where("user_id", "=", $user)->count();

        //pagination 
        $user_posts=Post::where("user_id", "=", $user)->paginate(2);
    
       

        $posts_data=Post::where('user_id',$request->user()->id)->orderBy('id','desc')->get();
        return view('profile',['data'=>$users,'count_post_data'=>$count_posts,'post_data'=>$posts_data,'user_post_data'=>$user_posts]);
    }

   
}