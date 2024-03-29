<x-admin.base>
  <form
    action="{{ route('about.store') }}"
    method="POST"
  >
    @csrf
    <div class="form-group">
      <label for="exampleFormControlInput1">Title</label>
      <input
        type="text"
        class="form-control"
        id="exampleFormControlInput1"
        name="title"
        value="{{ $about ? $about->title : '' }}"
      >
      <x-admin.error for="title" />
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Long Description</label>
      <textarea
        class="form-control"
        id="exampleFormControlTextarea1"
        rows="3"
        name="short-description"
      >{{ $about ? $about->short_description : '' }}</textarea>
      <x-admin.error for="short-description" />
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Long Description</label>
      <textarea
        class="form-control"
        id="exampleFormControlTextarea1"
        rows="3"
        name="long-description"
      >{{ $about ? $about->long_description : '' }}</textarea>
      <x-admin.error for="long-description" />
    </div>
    <button
      type="submit"
      class="btn btn-primary"
    >Update</button>
  </form>
</x-admin.base>
