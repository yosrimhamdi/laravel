<x-admin.base>
  <div class="row">
    <div class="col-md">
      <x-home.portfolio :images="$images" />
    </div>
    <div class="col-2">
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
    </div>
  </div>
</x-admin.base>
