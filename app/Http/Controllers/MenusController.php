<?php

namespace App\Http\Controllers;

use App\Models\Menus;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class MenusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        return response()->json(Menus::all(), 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        $menus = Menus::create($validated);

        return response()->json($menus, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Menus $menus): JsonResponse
    {
        return response()->json($menus, 200);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menus $menus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menus $menus): JsonResponse
    {
        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $menus->update($validated);

        return response()->json($menus, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menus $menus): JsonResponse
    {
        $menus->delete();

        return response()->json([
            'message' => 'Menu deleted successfully'
        ], 200);
    }
}
