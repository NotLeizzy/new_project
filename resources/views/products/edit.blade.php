<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Edit Product</h1>

    <form action="/products/{{ $item->id }}" method="POST" class="product-form">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name123" value="{{ $item->name }}" required>
        </div>

        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" id="price" name="price123" value="{{ $item->price }}" required>
        </div>

        <button type="submit" class="btn-submit">Update</button>
    </form>
    <br> 
    <a ref="/products" class="btn-back">Back to Products</a>
</body>
</html>