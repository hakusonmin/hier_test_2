<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function root()
    {
        $categories = Category::where('level', '1')
            ->get();

        return view('web.user.category.root', compact('categories'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Category $category)
    {
        $categories = Category::where('parent_id', $category->id)->get();

        $products = null;//初期化

        if ($categories->isEmpty()) {
            $products = Product::where('category_id', $category->id)
                ->get();
        }

        return view('web.user.category.index', compact('categories','products'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
