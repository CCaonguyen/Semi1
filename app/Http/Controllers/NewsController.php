<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\News;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\NewsController;

use Illuminate\Database\Eloquent\Model;

class NewsController extends Controller
{
    public function formNews()
    {
         $news = News::All();
        
        return view('admin.admin-news',  compact("news"));
    }



    public function CreateNews(Request $request)
    {
        $news = new News;
        $news->newsid = $request->newsid;
        $news->username =  $request->username;;
        $news->heading = $request->heading;
        $news->author = $request->author;
        $news->paraphase = $request->paraphase;
        $news->images = $request->images;
        $news->save();
        // return redirect('news');
         return redirect()->route('admin-news');
    }

    public function DeleteNews($newsid)
    {
        $news = News::find($newsid);
        $news->delete();
        return back();
    }

    public function ShowNews()
    {
        $news = News::all();
        return view('news', ['news' => $news]);
    }
}
