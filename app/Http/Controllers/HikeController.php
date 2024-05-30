<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Hike;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Requests\SearchHikesRequest;

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


        return View('hike.index', [

            'hikes' => $query->paginate(16),
            'input' => $request->validated(),
            //'tags' => Tag::pluck('name', 'id')

        ]);
    }

    /*
    public function searchByTags(Request $request)
    {
        $tags = explode(',', $request->input('tags')); // Assuming tags are comma-separated
        $hikes = Hike::whereHas('tags', function ($query) use ($tags) {
            foreach ($tags as $tag) {
                $query->orWhere('name', 'like', "%{$tag}%");
            }
        })->get();

        return view('search.results', compact('hikes'));


        if ($request->has('tags')) {
            $tagIds = $request->validated('tags')['*']; // Assuming 'tags' is an array of IDs
            $query->whereIn('id', $tagIds); // Assuming 'id' is the foreign key in 'hikes' referencing 'tags'
        }

        // Check if 'tags' input is present
        if ($request->filled('tags')) {
            $tagIds = $request->input('tags');
            $query->whereIn('id', $tagIds); // Assuming 'id' is the foreign key in 'hikes' referencing 'tags'
        }
        $hikes = $query->paginate(16);

        $tags = Tag::select('id', 'name')->get();

        return view('hike.index', [
            'hikes' => $hikes,
            'input' => $request->validated(),
            'tags' => $tags, // Pass the tags to the view
        ]);
    }
    */
    public function show(string $slug, Hike $hike)
    {
        $expectedSlug = $hike->getSlug();

        if ($slug !== $expectedSlug) {
            return to_route('hike.show', ['slug' => $expectedSlug, 'hike' => $hike]);
        }

        return view('hike.show', [
            'hike' => $hike
        ]);
    }
}
