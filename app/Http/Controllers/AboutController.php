<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateAboutRequest;
use App\Http\Requests\UpdatelogoRequest;
use App\Models\About;
use App\Traits\FileTrait;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    use FileTrait;

    public function __construct(protected About $about)
    {
        //
    }

    public function index()
    {
        $about = $this->about->first();
        return view('user.pages.about-us', compact('about'));
    }

    public function about()
    {
        $about = $this->about->first();
        return view('administration.pages.about', compact('about'));
    }

    public function update(UpdateAboutRequest $request)
    {
        // dd($request);
        $currentAbout = $this->about->first();
        $about =  $currentAbout->update($request->validated());
        return back()->with('message', 'Update Successful')->with('about', $about);
    }

    public function updateAboutImage(UpdateLogoRequest $request)
    {
        $about = $this->about->first();
        if ($about) {
            $fileNameToStore = $this->fileUpload('image', 'storage/logo/');
            Storage::delete('storage/logo/' . $about->image);
            $about->image = $fileNameToStore;
            $about->save();
            return redirect()->back()->with('message', 'Image updated Successful');
        } else {
            $fileNameToStore = $this->fileUpload('image', 'storage/logo/');
            $about->image = $fileNameToStore;
            $about->save();
            return redirect()->back()->with('message', 'Image Update Successful');
        }
    }
}
