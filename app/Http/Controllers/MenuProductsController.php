<?php

namespace App\Http\Controllers;

use App\Models\MenuProducts;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\StoreMenuProductsRequest;
use App\Http\Requests\UpdateMenuProductRequest;

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
    public function store(StoreMenuProductsRequest $request): JsonResponse
    {
        $menuProducts = MenuProducts::create($request->validated());

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
    public function update(UpdateMenuProductRequest $request, MenuProducts $menuproduct): JsonResponse
    {
        $validated = $request->validated();
        $menuproduct->update($validated);
        $menuproduct->refresh();

        return response()->json(['message' => 'Menu product updated successfully', 'data' => $menuproduct], 200);
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
