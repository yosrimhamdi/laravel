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
      {{-- <div class="alert alert-success" role="alert">{{ session('success') }}</div> --}}
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{ session('success') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
    <div class="card">
      <div class="card-header">All Categories</div>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">user id</th>
              <th scope="col">name</th>
              <th scope="col">date</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($categories as $category)
              <tr>
                <td>{{ $category->user_id}}</td>
                <td>{{ $category->name }}</td>                
                <td>
                  @if ($category->created_at)
                    {{ $category->created_at->diffForHumans() }}
                  @endif
                </td>
              </tr>             
            @endforeach
          </tbody>
        </table>
      </div>
      <div>{{ $categories->links() }}</div>
    </div>
  </div>
  <div class="col-md-4">
    @if (Auth::user())
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
    @endif
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>