<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostController extends Controller
{

    public function index(): JsonResource
    {
        // return  response()->json(Post::all(), 200);
        return PostResource::collection(Post::all());
    }

    public function store(PostRequest $request): JsonResponse
    {
        $post = Post::create($request->all());
        return response()-> json([
            'success' => true,
            'data' => $post,
        ], 201);
    }

    public function show(string $id): JsonResource
    {
        $post = Post::find($id);
        // return response()->json($post, 200);
        return new PostResource($post);
    }

    public function update(PostRequest $request, string $id): JsonResponse
    {
        $post = Post::find($id);
        $post->update($request->all());

        return response()->json([
            'success' => true,
            'data' => $post,
        ],200);
    }

    public function destroy(string $id): JsonResponse
    {
        Post::find($id)->delete();
        return response()->json([
            'success' => true,
        ],200);
    }
}
