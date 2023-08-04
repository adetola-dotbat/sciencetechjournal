<?php

namespace App\Http\Controllers;

use App\Models\Guideline;
use App\Http\Requests\StoreGuidelineRequest;
use App\Http\Requests\UpdateGuidelineRequest;

class GuidelineController extends Controller
{
    public function __construct(protected Guideline $guideline)
    {
        //
    }
    public function index()
    {
        $guideline = $this->guideline->first();
        return view('user.pages.guideline', compact('guideline'));
    }

    public function create()
    {
        $guideline = $this->guideline->first();
        return view('administration.pages.guideline', compact('guideline'));
    }

    public function update(StoreGuidelineRequest $request)
    {
        $guideline = $this->guideline->first();
        $guideline->update($request->validated());
        return redirect()->back()->with('message', 'Successful');
    }
}
