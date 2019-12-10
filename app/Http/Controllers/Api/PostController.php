<?php

namespace App\Http\Controllers\Api;

use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\Post as PostResource;

class PostController extends Controller
{
    public function getPosts(Request $request)
    {
        /* TODO dummy data. To be deleted. */

        return PostResource::collection(Post::query()->paginate(10));

        /* TODO dummy data. To be deleted. */
    }
}
