<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchHikesRequest;
use App\Models\Hike;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HikeController extends Controller
{
    public function index(SearchHikesRequest $request)
    {

        $query = Hike::query();
        if ($request->validated('distance')) {
            $query =  $query->where('distance', '<=', $request->validated('distance'));
        }

        if ($request->validated('duration')) {
            $query =  $query->where('duration', '<=', $request->validated('duration'));
        }


        if ($request->validated('name')) {

            $query = $query->where('name', 'like', "%{$request->validated('name')}%");
        }
        //$hikes = Hike::paginate(16);
        return View('hike.index', [
            //'hikes' => $hikes
            'hikes' => $query->paginate(16),
            'input' => $request->validated()

        ]);
    }

    public function show(string $slug, Hike $hike)
    {
        /*
        $expectedSlug = $hike->getSlug();

        if ($slug !== $expectedSlug) {
            return to_route('hike.show', ['slug' => $expectedSlug, 'hike' => $hike]);
        }

        return view('hike.show', [
            'hike' => $hike
        ]);
        */
    }
}
