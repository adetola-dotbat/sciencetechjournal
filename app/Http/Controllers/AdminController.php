<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Volume;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $volumes = Volume::all();
        $articles = Article::all();
        return view('administration.pages.dashboard', compact('volumes', 'articles'));
    }

    public function slider()
    {
        return view('administration.pages.slider');
    }
}
