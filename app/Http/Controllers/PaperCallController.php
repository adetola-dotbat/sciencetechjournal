<?php

namespace App\Http\Controllers;

use App\Http\Requests\CallForPaperRequest;
use App\Http\Requests\UpdateCallForPaperRequest;
use App\Models\Paper;
use Illuminate\Http\Request;

class PaperCallController extends Controller
{

    public function __construct(protected Paper $paper)
    {
        //
    }
    public function index()
    {
        return view('user.pages.call-for-paper');
    }
    public function paper()
    {
        $paper = $this->paper->first();
        return view('administration.pages.call-for-papers', compact('paper'));
    }
    public function update(CallForPaperRequest $request)
    {
        $paper = $this->paper->first();
        $paper->update($request->validated());
        return redirect()->back();
    }
    public function updatePaper(UpdateCallForPaperRequest $request)
    {
        $currentPaper = $this->paper->first();
        // dd($request->description);
        $paper = $currentPaper->update($request->validated());
        return back()->with('Call for paper successully updated')->with($paper, 'paper');
    }
    public function destroy(Paper $paper)
    {
        $paper->delete();
        return back()->with('Call for paper deleted successfully')->with($paper, 'paper');
    }
}
