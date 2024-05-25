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
        if ($request->has('distance')) {
            $query =  $query->where('distance', '<=', $request->input('distance'));
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
    }
}
