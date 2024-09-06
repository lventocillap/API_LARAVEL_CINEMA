<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;


class MovieController extends Controller
{
    public function index(): JsonResponse
    {
        $movies = Movie::all();
        return new JsonResponse($movies);
    }

    public function show(Movie $movie): JsonResponse
    {
        return new JsonResponse($movie);
    }

    public function store(Request $request): JsonResponse
    {
        Movie::create([
            'title' => $request->title,
            'gender' => $request->gender,
            'time' => $request->time,
            'premiere' => $request->premiere,
            'status' => $request->status
        ]);
        return new JsonResponse([
            'message' => 'Create Movie Succesful'
        ]);
    }

    public function update(Movie $movie, Request $request): JsonResponse
    {
        $movie->update([
            'title' => $request->title,
            'gender' => $request->gender,
            'time' => $request->time,
            'premiere' => $request->premiere,
            'status' => $request->status
        ]);
        return new JsonResponse([
            'message' => 'Create Movie Succesful'
        ]);
    }

    public function delete(Movie $movie): JsonResponse
    {
        $movie->delete();
        return new JsonResponse(['message' => 'Profile deleted successfully']);
    }
}
