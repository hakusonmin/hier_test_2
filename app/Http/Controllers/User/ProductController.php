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
        // 商品情報を取得
        $product = Product::with('skus')->findOrFail($product->id);

        // SKUごとのオプション（カラムごとのユニークな値を取得）
        $skuOptions = $this->getSkuOptions($product);

        // クエリパラメータから選択されたオプションを取得（デフォルト値は最初の値）
        $selectedOptions = $this->getSelectedOptions($request, $skuOptions);

        // 選択されたオプションに該当する SKU を取得
        $selectedSku = $this->findMatchingSku($product, $selectedOptions);

        return view('web.user.product.index', compact('product', 'skuOptions', 'selectedOptions', 'selectedSku'));
    }

    private function getSkuOptions($product)
    {
        $skuOptions = [];

        foreach ($product->skus as $sku) {
            $styleOptions = json_decode($sku->style, true); // JSONを配列として取得
            foreach ($styleOptions as $optionName => $optionValue) {
                $skuOptions[$optionName][] = $optionValue;
            }
        }
        // 各オプションのユニークな値を取得（重複削除）
        return array_map(fn($values) => array_values(array_unique($values)), $skuOptions);
    }

    private function getSelectedOptions(Request $request, array $skuOptions)
    {
        return collect($skuOptions)->mapWithKeys(fn($values, $key) => [
            $key => $request->query($key, $values[0] ?? null)
        ])->toArray();
    }

    private function findMatchingSku($product, array $selectedOptions)
    {
        $query = Sku::where('product_id', $product->id);

        foreach ($selectedOptions as $key => $value) {
            $query->whereJsonContains('style->' . $key, $value);
        }
        return $query->first();
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
