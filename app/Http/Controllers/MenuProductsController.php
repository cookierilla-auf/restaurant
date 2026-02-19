<?php

namespace App\Http\Controllers;

use App\Models\MenuProducts;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class MenuProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        return response()->json(MenuProducts::all(), 200);
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

        $menuProducts = MenuProducts::create($validated);

        return response()->json($menuProducts, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(MenuProducts $menuProducts): JsonResponse
    {
        return response()->json($menuProducts, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MenuProducts $menuProducts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MenuProducts $menuProducts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MenuProducts $menuProducts): JsonResponse
    {
        $menuProducts->delete();

        return response()->json([
            'message' => 'Menu product deleted successfully'
        ], 200);
    }
}
