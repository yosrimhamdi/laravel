<x-base title="brand">
  <img src="{{ asset($brand->image) }}" alt="brand image" style="width: 300px;">
  <x-form :action="'/brands/edit/' . $brand->id" :brand="$brand" />
</x-base>