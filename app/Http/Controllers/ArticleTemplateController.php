<?php

namespace App\Http\Controllers;

use App\Models\ArticleTemplate;
use App\Http\Requests\StoreArticleTemplateRequest;
use App\Http\Requests\UpdateArticleTemplateRequest;

class ArticleTemplateController extends Controller
{
    public function __construct(protected ArticleTemplate $articleTemplate)
    {
        //
    }
    public function index()
    {
        $articleTemplate = $this->articleTemplate->first();
        return view('user.pages.article-template', compact('articleTemplate'));
    }

    public function create()
    {
        $articleTemplate = $this->articleTemplate->first();
        return view('administration.pages.article-template', compact('articleTemplate'));
    }

    public function update(StoreArticleTemplateRequest $request)
    {
        $articleTemplate = $this->articleTemplate->first();
        $articleTemplate->update($request->validated());
        return redirect()->back();
    }
}
