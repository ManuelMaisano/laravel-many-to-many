<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tecnhology;
use App\Http\Requests\StoreTecnhologyRequest;
use App\Http\Requests\UpdateTecnhologyRequest;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTecnhologyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Tecnhology $tecnhology)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tecnhology $tecnhology)
    {
        //
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
