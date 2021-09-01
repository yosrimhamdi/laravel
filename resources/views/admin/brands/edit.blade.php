<x-admin.base>
  <x-admin.form
    :action="'/brands/' . $brand->id"
    :brand="$brand"
    title="Update Brand"
  >
    <img
      src="{{ asset($brand->image) }}"
      alt="brand image"
      style="width: 300px;"
    >
  </x-admin.form>
</x-admin.base>
