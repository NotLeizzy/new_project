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
            <label for="name123">Name:</label>
            <input type="text" id="name123" name="name123" value="{{ $item->name }}" required>
        </div>

        <div class="form-group">
            <label for="price123">Price:</label>
            <input type="text" id="price123" name="price123" value="{{ $item->price }}" required>
        </div>

        <div class="form-group">
            <label for="category_id">Category:</label>
            <select id="category_id" name="category_id" required>
                <option value="" disabled>Select a category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $item->category_id == $category->id ? 'selected' : '' }}>{{ $category->category_name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn-submit">Update</button>
    </form>
    <br>
    <a href="/products" class="btn-back">Back to Products</a>
</body>
</html>