<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Dashboard') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="display: flex; padding: 2em">
            <form action="/categories/edit/{{ $category->id }}" method="POST">
              @csrf
              <div class="form-group" style="margin-bottom: 1em">
                <h3>attemp to change category name: {{ $category->name }}</h3>
                <label for="exampleInputEmail1">New name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter New Name">
                @error('name')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
      </div>
  </div>
</x-app-layout>
