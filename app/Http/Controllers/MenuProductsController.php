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
        $validated = $request->validate([
            'menu_id' => 'required|integer|exists:menus,id',
            'product_id' => 'required|integer|exists:products,id',
        ]);

        $menuProducts = MenuProducts::create($validated);

        return response()->json($menuProducts, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(MenuProducts $menuproduct): JsonResponse
    {
        return response()->json($menuproduct, 200);
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
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MenuProducts $menuproduct): JsonResponse
    {
        $validated = $request->validate([
            'menu_id' => 'sometimes|required|integer|exists:menus,id',
            'product_id' => 'sometimes|required|integer|exists:products,id',
        ]);

        $menuproduct->update($validated);

        return response()->json($menuproduct, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MenuProducts $menuproduct): JsonResponse
    {
        $menuproduct->delete();

        return response()->json([
            'message' => 'Menu product deleted successfully'
        ], 200);
    }
}
