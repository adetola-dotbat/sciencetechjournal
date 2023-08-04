<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEditorRequest;
use App\Http\Requests\UpdateEditorRequest;
use App\Models\Designation;
use App\Models\Editor;
use App\Traits\FileTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EditorController extends Controller
{
    use FileTrait;

    public function __construct(protected Editor $editor)
    {
        //
    }
    public function index()
    {
        $designations = Designation::orderBy('designation')->with('editors')->get();
        return view('user.pages.editor', compact('designations'));
    }

    public function editor()
    {
        $designations = Designation::get();
        $editors = $this->editor->get();
        return view('administration.pages.editor', compact('editors', 'designations'));
    }

    public function store(Request $request)
    {
        $fileNameToStore = $this->fileUpload('image', 'storage/editors/');
        $show = $this->editor->create([
            'name' => $request->name,
            'institution' => $request->institution,
            'designation_id' => $request->designation_id,
            'image' => $fileNameToStore,
        ]);

        return redirect()->back()->with('message', 'Successful');
    }

    public function edit($editor)
    {
        $designations = Designation::get();
        $editor = $this->editor->find($editor);
        $editors = $this->editor->orderBy('id', 'desc')->get();
        return view('administration.pages.edit-editor', compact('editors', 'editor', 'designations'));
    }

    public function updateImage($editor)
    {
        $editor = $this->editor->find($editor);
        $fileNameToStore = $this->fileUpload('image', 'storage/editors/');
        Storage::delete('storage/editor/' . $editor->image);
        $editor->image = $fileNameToStore;
        $editor->save();
        return redirect()->back()->with('message', 'Successful');
    }

    public function update(UpdateEditorRequest $request, $editor)
    {

        $this->editor->find($editor)->update($request->validated());
        return redirect()->back()->with('message', 'Successful');
    }

    public function delete($editor)
    {
        $this->editor->find($editor)->delete();
        $designations = Designation::get();
        $editors = $this->editor->orderBy('id', 'desc')->get();
        return view('administration.pages.editor', compact('editors', 'designations'));
    }
}
