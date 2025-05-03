<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index() {
        $movies = Movie::where('post_type', 'movies')
            ->where('post_status', 'publish')
            ->get(['ID', 'post_title', 'post_content']);

        return response()->json($movies);
        // return response()->json($movies, 200, [], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }
}
