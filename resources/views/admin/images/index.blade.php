<x-admin.base
  table-title="All Images"
  form-title="Add New Images"
>
  <x-slot name="table">

  </x-slot>
  <x-slot name="form">
    <form
      action="{{ route('images.store') }}"
      enctype="multipart/form-data"
      method="POST"
    >
      @csrf
      <div class="form-group">
        <label for="exampleFormControlFile1">Example file input</label>
        <input
          type="file"
          class="form-control-file"
          id="exampleFormControlFile1"
          multiple
          accept="image/*"
          name="images[]"
        >
      </div>
      <button
        type="submit"
        class="btn btn-primary"
      >Submit</button>

    </form>
  </x-slot>
</x-admin.base>
