<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Categories</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
<div class="container">
  <h1>Categories</h1>
  <form action="/categoriesAdd" method="POST" class="category-form">
    @csrf
    
    <div class="form-group">
      <label for="category_name">Name:</label>
      <input type="text" id="category_name" name="category_name" required>
    </div>
    
    <button type="submit" class="btn-submit">Save</button>
  </form>

  <hr>

  <table class="employee-table">
    <thead> 
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($categories as $item)
      <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->category_name }}</td>
        <td>
          <a href="/categories/{{ $item->id }}/edit" class="btn-edit">Edit</a>
          <form action="/categories/{{ $item->id }}" method="POST" style="display:inline;">
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