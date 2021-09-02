<x-admin.base
  table-title="All Sliders"
  form-title="Add New Slider"
>
  <x-slot name="table">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">image</th>
          <th scope="col">title</th>
          <th scope="col">description</th>
          <th scope="col">actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($sliders as $slider)
          <tr scope="row">
            <td>
              <img
                src="{{ asset($slider->image) }}"
                alt="slider image"
                style="width: 140px; height:140px; object-fit:cover;"
              >
            </td>
            <td>{{ $slider->title }}</td>
            <td>{{ $slider->description }}</td>
            <td>
              <form
                action="/admin/sliders/{{ $slider->id }}"
                method="POST"
              >
                @csrf
                @method('DELETE')
                <button
                  type="submit"
                  class="btn btn-danger"
                >delete</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </x-slot>


  <x-slot name="form">
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
        <x-admin.helpers.error input="title" />
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Slider Description</label>
        <textarea
          type="text"
          class="form-control"
          id="exampleFormControlInput1"
          placeholder="description"
          name="description"
        ></textarea>
        <x-admin.helpers.error input="description" />
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
        <x-admin.helpers.error input="image" />
      </div>
      <button
        type="submit"
        class="btn btn-primary"
      >Upload</button>
    </form>
  </x-slot>

</x-admin.base>
