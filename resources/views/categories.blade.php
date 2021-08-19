<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <title>Document</title>
</head>
<body style="display: flex; padding: 4em;">
  <div class="col-md-8" style="margin-right: 1em">
    @if (session('success'))
      <div>{{ session('success') }}</div>
    @endif
    <div class="card">
      <div class="card-header">All Categories</div>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">user id</th>
              <th scope="col">name</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($categories as $category)
              <tr>
                <th scope="row">{{$category->id  }}</th>
                <td>{{ $category->user_id}}</td>
                <td>{{ $category->name }}</td>
              </tr>             
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card">
      <div class="card-header">Add New Category</div>
      <div class="card-body">
        <form action="/categories" method="POST">
          @csrf
          <div class="form-group" style="margin-bottom: 1em">
            <label for="exampleInputEmail1">Category Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            @error('name')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>

  </div>
</body>
</html>