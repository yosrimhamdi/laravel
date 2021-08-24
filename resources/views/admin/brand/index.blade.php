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
                    <th scope="col">actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($brands as $brand)
                    <tr>
                      <td><img src="{{ asset($brand->image) }}" alt="brand image" style="width: 150px; height 150px; object-fit:cover;" ></td>
                      <td>{{ $brand->name }}</td>
                      <td>{{ $brand->created_at->diffForHumans() }}</td>
                      <td>
                        <a href="/brands/edit/{{ $brand->id }}" class="btn btn-info" style="color: white">edit</a>
                        <a href="/brands/delete/{{ $brand->id }}" class="btn btn-danger">delete</a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
      </div>
  </div>
</x-app-layout>
