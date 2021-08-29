<x-admin.base>
  <form
    action="/admin/sliders"
    method="POST"
    enctype="multipart/form-data"
  >
    @csrf
    <div class="form-group">
      <label for="exampleFormControlInput1">Slider Title</label>
      <input
        type="text"
        class="form-control"
        id="exampleFormControlInput1"
        placeholder="title"
        name="title"
      >
      <x-admin.error input="title" />
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Slider Description</label>
      <input
        type="text"
        class="form-control"
        id="exampleFormControlInput1"
        placeholder="description"
        name="description"
      >
      <x-admin.error input="description" />
    </div>
    <div class="form-group">
      <label for="exampleFormControlFile1">Slider Image</label>
      <input
        type="file"
        class="form-control-file"
        id="exampleFormControlFile1"
        name="image"
        accept="image/*"
      >
      <x-admin.error input="image" />
    </div>
    <button
      type="submit"
      class="btn btn-primary"
    >Upload</button>
  </form>
</x-admin.base>
