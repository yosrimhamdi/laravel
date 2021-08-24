<x-base title="brand">
  <x-form 
    :action="'/brands/edit/' . $brand->id" 
    :brand="$brand"
    btn-title="Update Brand"
  >
    <img src="{{ asset($brand->image) }}" alt="brand image" style="width: 300px;">
  </x-form>
</x-base>