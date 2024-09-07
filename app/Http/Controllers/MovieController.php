<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Movie\StoreMovieRequest;
use App\Http\Requests\Movie\UpdateMovieRequest;
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

    public function store(StoreMovieRequest $request): JsonResponse
    {
        Movie::create([
            'title' => $request->title,
            'gender' => $request->gender,
            'time' => $request->time,
            'premiere' => $request->premiere,
            'status_id' => $request->status_id
        ]);
        return new JsonResponse([
            'message' => 'Insert Movie Succesful'
        ]);
    }

    public function update(Movie $movie, UpdateMovieRequest $request): JsonResponse
    {
        $movie->update([
            'title' => $request->title,
            'gender' => $request->gender,
            'time' => $request->time,
            'premiere' => $request->premiere,
            'status_id' => $request->status_id
        ]);
        return new JsonResponse([
            'message' => 'Update Movie Succesful'
        ]);
    }

    public function delete(Movie $movie): JsonResponse
    {
        $movie->delete();
        return new JsonResponse(['message' => 'Delete Movie successfully']);
    }
}
