<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\HikeFormRequest;
use App\Models\Hike;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HikeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return View('admin.hike.index', [
            'hikes' => Hike::orderBy('create_at', 'desc')->paginate(25)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('admin.hike.form', [
            'hike' => new Hike(),
            'tags' => Tag::pluck('name', 'id')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HikeFormRequest $request)
    {
        $hike = Hike::create($request->validated());
        $hike->tags()->sync($request->validated('tags'));

        return to_route('admin.hike.index')->with('success', 'Le hike a bien été créé');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hike $hike)
    {
        return View('admin.hike.form', [
            'hike' => $hike,
            'tags' => Tag::pluck('name', 'id')

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HikeFormRequest $request, Hike $hike)
    {
        $hike->update($request->validated());
        $hike->tags()->sync($request->validated('tags'));
        return to_route('admin.hike.index')->with('success', 'Le hike a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hike $hike)
    {
        $hike->delete();
        return to_route('admin.hike.index')->with('success', 'Le hike a bien été supprimé');
    }
}
