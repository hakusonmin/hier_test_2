<div class="container">
  <h1>{{ $product->name }}</h1>

  @if ($selectedSku)
    <img src="{{ asset('images/' . $selectedSku->product_number . '.jpg') }}" width="300">
    <p>価格: {{ number_format($selectedSku->price) }}円</p>
    <p>商品コード: {{ number_format($selectedSku->product_number) }}</p>
    <p>在庫: {{ $selectedSku->stock }}</p>
  @else
    <p>この組み合わせのSKUは存在しません</p>
  @endif

  <form method="GET" action="{{ route('user.product.index', ['product' => $product->id]) }}">
    @foreach ($skuOptions as $optionName => $values)
      <label>{{ ucfirst($optionName) }}:</label>
      <select name="{{ $optionName }}" onchange="this.form.submit()">
        @foreach ($values as $value)
          <option value="{{ $value }}" {{ request($optionName) == $value ? 'selected' : '' }}>
            {{ $value }}
          </option>
        @endforeach
      </select>
    @endforeach

  </form>
</div>
