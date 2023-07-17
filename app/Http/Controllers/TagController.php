<?php

namespace App\Http\Controllers;

use App\Models\TagModel;
use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreTagRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TagModel $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TagModel $tag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTagRequest $request, TagModel $tag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TagModel $tag)
    {
        //
    }
}
