<?php

namespace App\Http\Controllers;

use App\Enums\PublishStatus;
use App\Models\About;
use App\Models\Article;
use App\Models\Designation;
use App\Models\Editor;
use App\Models\Manuscript;
use App\Models\Paper;
use App\Models\Slider;
use App\Models\Volume;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $total_manuscript = Manuscript::all();
        $total_article = Article::where('publish_status', PublishStatus::PUBLISHED)->get();
        // dd($slider);
        $article = Article::latest('id')->first();
        $about = About::first();
        $articles = Article::latest('id')->limit(4)->get();
        $picks = Article::where('popularity', '>=', '1')->limit(4)->get();
        $paper = Paper::first();
        $volume = Volume::latest('id')->first();
        $volumes = Volume::latest('id')->limit(3)->get();
        $designation = Designation::where('designation', 'editor in chief')->first();
        $editorInCharge = Editor::where('designation_id', $designation->id)->first();
        $editors = Editor::limit(4)->latest('id')->get();
        return view('user.pages.home', compact('sliders', 'article', 'articles', 'about', 'paper', 'picks', 'volume', 'volumes', 'editorInCharge', 'editors', 'total_manuscript', 'total_article'));
    }
}
