<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employees</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
<div class="container">
  <h1>Employees</h1>
  <form action="/employees123" method="POST" class="employee-form">
    @csrf
    
    <div class="form-group">
      <label for="FirstName">First Name:</label>
      <input type="text" id="FirstName" name="FirstName" required>
    </div>
    
    <div class="form-group">
      <label for="LastName">Last Name:</label>
      <input type="text" id="LastName" name="LastName" required>
    </div>
    
    <div class="form-group">
      <label for="Job">Job Title:</label>
      <input type="text" id="Job" name="Job" required>
    </div>
    
    <div class="form-group">
      <label for="Salary">Salary:</label>
      <input type="text" id="Salary" name="Salary" required>
    </div>
    
    <button type="submit" class="btn-submit">Save</button>
  </form>

  <hr>

  <table class="employee-table">
    <thead>
      <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Job</th>
        <th>Salary</th>
      </tr>
    </thead>
    <tbody>
      @foreach($items as $item)
      <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->FirstName }}</td>
        <td>{{ $item->LastName }}</td>
        <td>{{ $item->Job }}</td>
        <td>{{ $item->Salary }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>


</body>

</html>