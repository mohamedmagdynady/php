<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\post;
use Auth;
class postcontroller extends Controller
{
    //
    public function posts(){
      /*  $posts=DB::table('posts')->get();
        //$posts=post::all();
        return view('post',compact('posts'));*/
        $empleado=DB::table('posts')->get();
        $users=DB::table('users')->get();
          
        return view('post',compact('empleado','users'));
    }
    public function getpost(post $post){
        /*  $posts=DB::table('posts')->get();
          //$posts=post::all();
          return view('post',compact('posts'));*/

          $empleado=DB::table('posts')->get();
            
          return view('postalone',compact('empleado','post'));
      }
      public function storepost(Request $request){
       
            /*if($request->title==''){
                //echo "<script type='text/javascript'>alert('title entered cannot be empty!')</script>";
                return back();

            }else{*/

                $users=DB::table('users')->get();
          
                $imgname=time().'.'.$request->url->getClientOriginalExtension();
            $post=new post;
            $post->title=$request->title;
            $post->body=$request->body;
            $post->writtenby=Auth::user()->id;
            $post->url=$imgname;
            $post->save();
            $empleado=DB::table('posts')->get();

           // $imgname=time().'.'.$request->url->getClientOriginalExtension();

            $request->url->move(public_path('uploads'),$imgname);
          
            return view('post',compact('empleado','users'));
            //return back()->with($users);
            //return view('post',compact('users'));
            //return view('about');
            }
        

      
}
