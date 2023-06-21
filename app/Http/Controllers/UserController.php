<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function blogview(Request $request)
    {
        $topblog = Blog::orderBy('created_at', 'desc')
                ->take(4)
                ->get();

        $allblog = Blog::all();
        
        $popularblog = Blog::orderBy('read', 'desc')
                ->take(5)
                ->get();
        return view('Blog',compact('topblog', 'allblog','popularblog'));
    }
}
