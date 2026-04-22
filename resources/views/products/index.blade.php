<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
<div class="container">
  <h1>Products</h1>

  <form action="/products123" method="POST" class="product-form">
    @csrf
    <div class="form-group">
      <label for="name123">Name:</label>
      <input type="text" id="name123" name="name123">
    </div>

    <div class="form-group">
      <label for="price123">Price:</label> 
      <input type="text" id="price123" name="price123">
    </div>

    <div class="form-group">
      <label for="category_id">Category:</label>
      <select id="category_id" name="category_id" required>
        <option value="" disabled selected>Select a category</option>
        @foreach($categories as $category)
          <option value="{{ $category->id }}">{{ $category->category_name }}</option>
        @endforeach
      </select>
    </div>

    <button type="submit" class="btn-submit">Save</button>
  </form>

  <hr>

  <table class="product-table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Category</th>
        <th>Actions</th>
      </tr>
    </thead>

    <tbody>
      @foreach($items as $item)
      <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->price }}</td>
        <td>{{ $item->category->category_name ?? 'No Category' }}</td>
        <td>
          <a href="/products/{{ $item->id }}/edit" class="btn-edit">Edit</a>
          <form action="/products/{{ $item->id }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this product?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn-delete">Delete</button>
          </form>
        </td>

      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>