<?php

namespace App\Http\Controllers;

use App\Enums\VolumeEnum;
use App\Models\Volume;
use App\Http\Requests\StoreVolumeRequest;
use App\Http\Requests\UpdateVolumeRequest;
use App\Traits\FileTrait;
use Illuminate\Support\Facades\Storage;

class VolumeController extends Controller
{
    use FileTrait;

    public function __construct(protected Volume $volume)
    {
    }
    public function volume()
    {
        $volumes = $this->volume->get();
        return view('administration.pages.volume', compact('volumes'));
    }
    public function store(StoreVolumeRequest $request)
    {
        if (auth()->user()->role == 'admin') {
            $fileNameToStore = $this->fileUpload('image', 'storage/volume/');
            $this->volume->create([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $fileNameToStore,
            ]);
            return redirect()->back()->with('message', 'Successful');
        } else {
            abort('402');
        }
    }
    public function update(UpdateVolumeRequest $request, $volume)
    {
        $volume = $this->volume->find($volume)->update($request->validated());
        return redirect()->back()->with('message', 'Successful');
    }

    public function updateImage($volume)
    {
        $volume = $this->volume->find($volume);
        $fileNameToStore = $this->fileUpload('image', 'storage/volume/');
        Storage::delete('storage/volume/' . $volume->image);
        $volume->image = $fileNameToStore;
        $volume->save();
        return redirect()->back()->with('message', 'Successful');
    }
    public function edit($volume)
    {
        $volume = $this->volume->find($volume);
        $volumes = $this->volume->get();
        return view('administration.pages.edit-volume', compact('volume', 'volumes'));
    }

    public function status($volume)
    {
        $volume = $this->volume->find($volume);
        if ($volume->status == 'pending') {
            $volume->status = VolumeEnum::ACTIVATED;
            $volume->save();
        } else {
            $volume->status = VolumeEnum::PENDING;
            $volume->save();
        }
        return redirect()->back()->with('message', 'Successful');
    }
}
