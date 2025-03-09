<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Sku;
use App\Models\SkuOption;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, Product $product)
    {

        $product = Product::with('skus.options')->findOrFail($product->id);

        // 'options.name'（例: "色", "サイズ"）をキーに、'sku_options.name'（例: "赤", "M"）を値として格納
        $skuOptions = [];
        foreach ($product->skus as $sku) {
            foreach ($sku->options as $option) {
                $skuOptions[$option->name][] = $option->pivot->name;
            }
        }
        // 各オプションのユニークな値を取得（重複削除）
        foreach ($skuOptions as &$values) {
            $values = array_values(array_unique($values));
        }
        unset($values); // 参照渡しを解除

        // クエリパラメータから選択されたオプションを取得（デフォルト値：最初のオプション）
        $selectedOptions = [];
        foreach ($skuOptions as $key => $values) {
            $selectedOptions[$key] = $request->query($key, isset($values[0]) ? $values[0] : '');
        }
        // 選択されたオプションに該当するSKUを取得
        $selectedSku = Sku::where('product_id', $product->id);

        foreach ($selectedOptions as $key => $value) {
            $selectedSku->whereHas('options', function ($query) use ($key, $value) {
                $query->where('options.name', $key)
                    ->where('sku_options.name', $value);
            });
        }

        $selectedSku = $selectedSku->first();

        return view('web.user.product.index', compact('product', 'skuOptions', 'selectedOptions', 'selectedSku'));
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
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
