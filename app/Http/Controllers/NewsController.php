<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;



class NewsController extends Controller
{
    public function show(){
        $news = News::all();
        return view('home', [
            'news' => $news
        ]);
    }
    public function create(){
        return view('create');
    }

    public function store(Request $request): RedirectResponse{
        $this->validate($request, [
            'judul' => 'required|min:3|max:30',
            'artikel' => 'required|min:3|max:100'
        ]);

            News::create([
            'judul' => $request->judul,
            'artikel' => $request->artikel
        ]);


        return redirect('news');
    }
}
