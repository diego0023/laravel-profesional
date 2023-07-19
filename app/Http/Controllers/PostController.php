<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index(): JsonResponse
    {
        return  response()->json(Post::all(), 200);
    }

    public function store(PostRequest $request): JsonResponse
    {
        $post = Post::create($request->all());
        return response()-> json([
            'success' => true,
            'data' => $post,
        ], 201);
    }

    public function show(string $id): JsonResponse
    {
        $post = Post::find($id);
        return response()->json($post, 200);
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
