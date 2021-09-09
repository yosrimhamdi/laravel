<div class="card">
  <div class="card-header">{{ $title }}</div>
  <div class="card-body">
    <form
      action="{{ $action }}"
      method="POST"
      enctype="multipart/form-data"
    >
      @csrf
      @method($method)
      <div
        class="form-group"
        style="margin-bottom: 1em"
      >
        <label for="exampleInputEmail1">Brand Name</label>
        <input
          type="text"
          value="{{ $brand->name ?? '' }}"
          name="name"
          class="form-control"
          id="exampleInputEmail1"
          aria-describedby="emailHelp"
          placeholder="Enter Brand Name"
        >
        <x-admin.error for="name" />
      </div>
      <div
        class="form-group"
        style="margin-bottom: 1em"
      >
        <label for="exampleFormControlFile1">Choose A New Brand Image</label>
        <input
          type="file"
          name="image"
          accept="image/*"
          class="form-control-file"
          id="exampleFormControlFile1"
        >
        <x-admin.error for="image" />
        <div
          class="form-group"
          style="margin: 1em 0"
        > {{ $slot }} </div>
        <button
          type="submit"
          class="btn btn-primary"
        >{{ $title }}</button>
    </form>
  </div>
</div>
