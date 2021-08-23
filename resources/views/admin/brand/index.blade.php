<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Brands') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="padding: 2em; display:flex;">
            <table class="table" style="margin-right: 2em">
              <thead>
                <tr>
                  <th scope="col">id</th>
                  <th scope="col">name</th>
                  <th scope="col">image</th>
                  <th scope="col">created_at</th>
                </tr>
              </thead>
              <tbody>
                @foreach($brands as $brand)
                  <tr>
                    <th scope="row">{{ $brand->id }}</th>
                    <td>{{ $brand->name }}</td>
                    <td><img src="{{ $brand->image }}" alt="brand image"></td>
                    <td>{{ $brand->created_at->diffForHumans() }}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            <form>
              {{-- @csrf --}}
              <div class="form-group" style="margin-bottom: 1em">
                <label for="exampleInputEmail1">Brand Name</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Brand Name">
              </div>
              <div class="form-group" style="margin-bottom: 1em">
                <label for="exampleFormControlFile1">Example file input</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
      </div>
  </div>
</x-app-layout>
