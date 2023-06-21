<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function blogview(Request $request)
    {
        $topblog = Blog::orderBy('read', 'desc')
                ->take(4)
                ->get();

        $allblog = Blog::all();
        
        return view('Blog',compact('topblog', 'allblog'));
    }
}
