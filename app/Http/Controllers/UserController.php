<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResouce;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResource
    {
        $user = User::all();
        return UserResouce::collection($user);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function login(Request $request)
    {
        $user = User::where('email', $request->email)
        ->where('password', $request->password)
        ->first();
        // if ($user) {
        //     return new JsonResponse([
        //         'message' => 'user login'
        //     ]);
        // }
        dd($user);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
