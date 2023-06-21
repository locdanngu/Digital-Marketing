<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function blogview(Request $request)
    {
        $limit = $request->limit ?? 5;
        $search = $request->search;
        $topblog = Blog::orderBy('created_at', 'desc')
                ->take(4)
                ->get();
        if ($search) {
            $allblog = Blog::where('title', 'like', '%' . $search . '%')->paginate($limit);
        }else{
            $allblog = Blog::paginate($limit);
        }
        
        $popularblog = Blog::orderBy('read', 'desc')
                ->take(5)
                ->get();
        return view('Blog',compact('topblog', 'allblog','popularblog','search'));
    }

    public function contentblogview(Request $request)
    {
        $idbaiviet = $request->route('idbaiviet');
        $topblog = Blog::orderBy('created_at', 'desc')
                ->take(4)
                ->get();
    
        $popularblog = Blog::orderBy('read', 'desc')
                ->take(5)
                ->get();
        $blog = Blog::where('idblog',$idbaiviet)->first();
        return view('Contentblog',compact('topblog','popularblog','blog'));
    }
}