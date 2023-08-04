<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDesignationRequest;
use App\Http\Requests\UpdateDesignationRequest;
use App\Models\Designation;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    public function __construct(protected Designation $designation)
    {
    }
    public function designation()
    {
        $designations = $this->designation->orderBy('id', 'desc')->get();
        return view('administration.pages.designation', compact('designations'));
    }

    public function store(StoreDesignationRequest $request)
    {
        $this->designation->create($request->validated());
        return redirect()->back()->with('message', 'Successful');
    }
    public function edit($designation)
    {
        $designation = $this->designation->find($designation);
        $designations = $this->designation->orderBy('id', 'desc')->get();
        return view('administration.pages.edit-designation', compact('designations', 'designation'));
    }

    public function update(UpdateDesignationRequest $request, $designation)
    {
        $this->designation->find($designation)->update($request->validated());
        return redirect()->back()->with('message', 'Successful');
    }

    public function delete($designation)
    {
        $this->designation->find($designation)->delete();
        $designations = $this->designation->orderBy('id', 'desc')->get();
        return view('administration.pages.designation', compact('designations'));
    }
}
