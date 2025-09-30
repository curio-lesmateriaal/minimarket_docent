<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('products.index', ['products' => Product::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'start_price' => ['required', 'numeric', 'min:0'],
            'description' => ['nullable', 'string'],
            'image_url' => ['nullable', 'url'],
            'status' => ['required', 'in:Nieuwstaat,Tweedehands'],
            'sold_to' => ['nullable', 'integer', 'exists:users,id'],
        ]);

        $product = Product::create($validated);

        return redirect()->route('products.show', $product)
            ->with('success', __('Product aangemaakt.'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        $users = User::all();
        return view('products.edit', compact('product', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'start_price' => ['required', 'numeric', 'min:0'],
            'description' => ['nullable', 'string'],
            'image_url' => ['nullable', 'url'],
            'status' => ['required', 'in:Nieuwstaat,Tweedehands'],
            'sold_to' => ['nullable', 'integer', 'exists:users,id'],
        ]);

        $product = Product::findOrFail($id);
        $product->update($validated);

        return redirect()->route('products.show', $product)
            ->with('success', __('Product bijgewerkt.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', __('Product verwijderd.'));
    }
}
