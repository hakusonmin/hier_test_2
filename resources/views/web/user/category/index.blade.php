<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  @foreach ($categories as $category)
    <a href="{{ route('user.category.index', ['category' => $category->id]) }}">
      <div>{{ $category->name }}</div>
    </a>
  @endforeach

  @if (!empty($products))
    @foreach ($products as $product)
      <a href="{{ route('user.product.index', ['product' => $product->id]) }}">
        <div>{{ $product->name }}</div>
      </a>
    @endforeach
  @endif
  <button class="back-button" type="button" onClick="history.back();">戻る</button>
</body>

</html>
