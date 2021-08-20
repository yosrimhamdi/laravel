<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Dashboard') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="display: flex; padding: 2em">
            <div class="col-md-8" style="margin-right: 1em">
              @if (session('success'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert" style="display: flex; justify-content: space-between;">
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
                        <th scope="col">user name</th>
                        <th scope="col">category name</th>
                        <th scope="col">date</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($categories as $category)
                        <tr>
                          <td>{{ $category->user->name }}</td>
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
            </div>          </div>
      </div>
  </div>
</x-app-layout>
