<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Brands') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        @if (session('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert" >
            <span>{{ session('success') }}</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div style="padding: 2em; display:flex;">
              <table class="table" style="margin-right: 2em">
                <thead>
                  <tr>
                    <th scope="col">image</th>
                    <th scope="col">name</th>
                    <th scope="col">created_at</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($brands as $brand)
                    <tr>
                      <td><img style="width: 150px; height 150px; object-fit:cover;" src="{{ $brand->image }}" alt="brand image"></td>
                      <td>{{ $brand->name }}</td>
                      <td>{{ $brand->created_at->diffForHumans() }}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              <form action="/brands" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group" style="margin-bottom: 1em">
                  <label for="exampleInputEmail1">Brand Name</label>
                  <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Brand Name">
                  @error('name')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group" style="margin-bottom: 1em">
                  <label for="exampleFormControlFile1">Example file input</label>
                  <input type="file" name="image" accept="image/*" class="form-control-file" id="exampleFormControlFile1">
                @error('image')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
      </div>
  </div>
</x-app-layout>
