<?php

namespace App\Http\Controllers;

use App\Models\Menus;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;

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
    public function store(StoreMenuRequest $request): JsonResponse
    {
        $menus = Menus::create($request->validated());

        return response()->json($menus, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Menus $menu): JsonResponse
    {
        return response()->json($menu, 200);
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
    public function update(UpdateMenuRequest $request, Menus $menu): JsonResponse
    {
        $validated = $request->validated();
        $menu->update($validated);
        $menu->refresh();

        return response()->json(['message' => 'Menu updated successfully', 'data' => $menu], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menus $menu): JsonResponse
    {
        $menu->delete();

        return response()->json([
            'message' => 'Menu deleted successfully'
        ], 200);
    }
}
