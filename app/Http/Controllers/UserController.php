<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function blogview(Request $request)
    {
        $limit = $request->limit ?? 3;
        $search = $request->search;
        $topblog = Blog::orderBy('created_at', 'desc')
                ->take(4)
                ->get();

        $allblog = Blog::paginate($limit);
        
        $popularblog = Blog::orderBy('read', 'desc')
                ->take(5)
                ->get();
        return view('Blog',compact('topblog', 'allblog','popularblog','search'));
    }
}
