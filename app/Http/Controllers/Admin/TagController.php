<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TagFormRequest;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return View('admin.tag.index', [
            'tags' => Tag::paginate(25)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('admin.tag.form', [
            'tag' => new Tag()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TagFormRequest $request)
    {
        $tag = Tag::create($request->validated());
        return to_route('admin.tag.index')->with('success', 'Le tag a bien été créé');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        return View('admin.tag.form', [
            'tag' => $tag
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TagFormRequest $request, Tag $tag)
    {
        $tag->update($request->validated());
        return to_route('admin.tag.index')->with('success', 'Le tag a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return to_route('admin.tag.index')->with('success', 'Le tag a bien été supprimé');
    }
}
