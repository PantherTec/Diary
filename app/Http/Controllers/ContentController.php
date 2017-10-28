<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Content;
use Image;

class ContentController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('home',compact('user'));
    }
public function add()
    {
        return view('create');
    }
    public function profile()
    {    $userId = Auth::user()->id;
        $contents = Content::where('user_id',$userId)->get();
        return view('profile',compact('contents'));
    }

    public function create(Request $request)
    {
        $content = new Content();
        $content->date = $request->Date;
        $content->title = $request->title;
        $content->story = $request->story;
        $content->user_id = Auth::id();

        $content->save();
        return redirect('/profile'); 
    }
    public function editprofile(){
        return view ('editprofile', array('user' => Auth::user()));
    }
    public function updateavatar(Request $request){
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/'.$filename));
            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        return view ('editprofile', array('user' => Auth::user()));

    }
 public function updateheader(Request $request){
        if($request->hasFile('header')){
            $header = $request->file('header');
            $filename = time() . '.' . $header->getClientOriginalExtension();
            Image::make($header)->resize(1000, 1000)->save( public_path('/uploads/headers/'.$filename));
            $user = Auth::user();
            $user->header = $filename;
            $user->save();
        }
        return view ('editprofile', array('user' => Auth::user()));

    }
}
