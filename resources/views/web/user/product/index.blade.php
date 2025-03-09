<div class="container">
    <h1>{{ $product->name }}</h1>

    @if ($selectedSku)
        {{-- <img src="{{ asset('images/' . $selectedSku->sku_code . '.jpg') }}" width="300"> --}}
        <p>価格: {{ number_format($selectedSku->price) }}円</p>
        <p>在庫: {{ $selectedSku->stock }}</p>
        <p>製品コード: {{ $selectedSku->product_number }}</p>
    @else
        <p>この組み合わせの商品は存在しません</p>
    @endif

    <form method="GET" action="{{ route('user.product.index', ['product' => $product->id]) }}">
        @foreach ($skuOptions as $optionName => $values)
            <label>{{ ucfirst($optionName) }}:</label>
            <select name="{{ $optionName }}" onchange="this.form.submit()">
                @foreach ($values as $value)
                    <option value="{{ $value }}" {{ $selectedOptions[$optionName] == $value ? 'selected' : '' }}>
                        {{ $value }}
                    </option>
                @endforeach
            </select>
        @endforeach
    </form>
    <button class="back-button" type="button" onClick="history.back();">戻る</button>
</div>
