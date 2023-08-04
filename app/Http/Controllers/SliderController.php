<?php

namespace App\Http\Controllers;

use App\Helper\FileHelper;
use App\Http\Requests\SliderRequest;
use App\Http\Requests\UpdateSliderImageRequest;
use App\Http\Requests\UpdateSliderRequest;
use App\Models\Slider;
use App\Traits\FileTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    use FileTrait;

    public function __construct(protected Slider $slider)
    {
        //
    }
    public function slider()
    {
        $sliders = $this->slider->get();
        return view('administration.pages.slider', compact('sliders'));
    }


    public function store(SliderRequest $request)
    {

        if (auth()->user()) {
            $fileNameToStore = $this->fileUpload('image', 'storage/slider/');
            $this->slider->create([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $fileNameToStore,
            ]);
            return redirect()->back()->with('message', 'Successful');
        } else {
            abort('402');
        }
    }

    public function edit($data)
    {
        $slider = $this->slider->find($data);
        $sliders = $this->slider->get();
        return view('administration.pages.edit-slider', compact('slider', 'sliders'));
    }

    public function update(UpdateSliderRequest $request, $slider)
    {
        $slider = $this->slider->find($slider)->update($request->validated());
        return redirect()->back()->with('message', 'Successful');
    }

    public function updateSliderImage(UpdateSliderImageRequest $request, $slider)
    {
        $slider = $this->slider->find($slider);
        $fileNameToStore = $this->fileUpload('image', 'storage/slider/');
        Storage::delete('storage/slider/' . $slider->image);
        $slider->image = $fileNameToStore;
        $slider->save();
        return redirect()->back()->with('message', 'Successful');
    }

    public function delete($data)
    {
        $slider = $this->slider->find($data);
        Storage::delete('storage/slider/' . $slider->image);
        $slider->delete();
        return redirect()->back()->with('message', 'Successful');
    }
}
