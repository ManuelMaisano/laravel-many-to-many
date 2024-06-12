<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tecnhology;
use App\Http\Requests\StoreTecnhologyRequest;
use App\Http\Requests\UpdateTecnhologyRequest;
use App\Models\Technology;

class TecnhologyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $technologies = Technology::all();
        return view('admin.technologies.index', compact('technologies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        return view('admin.technologies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTecnhologyRequest $request)
    {
        $request->validate([
            'name' => 'required|unique:technologies|max:255',
        ]);
        $form_data = $request->all();
        $form_data['slug'] = Technology::generateSlug($form_data['name']);
        $new_technology = Technology::create($form_data);
        return redirect()->route('admin.technologies.show', $new_technology->slug)->with("message", "La tecnologia $new_technology->name e stata aggiunta correttamente");
    }

    /**
     * Display the specified resource.
     */
    public function show(Tecnhology $tecnhology)
    {
        return view('admin.technologies.show', compact('technology'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tecnhology $tecnhology)
    {
        return view('admin.technologies.edit', compact('technology'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTecnhologyRequest $request, Tecnhology $tecnhology)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tecnhology $tecnhology)
    {
        //
    }
}
