<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Edit Category</h1>

    <form action="/categories/{{ $category->id }}" method="POST" class="category-form">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="category_name">Name:</label>
            <input type="text" id="category_name" name="category_name" value="{{ $category->category_name }}" required>
        </div>

        <button type="submit" class="btn-submit">Update</button>
    </form>
    <br>
    <a href="/categories" class="btn-back">Back to Categories</a>
</body>
</html>