<x-admin.base>
  <form
    action="/categories/{{ $category->id }}"
    method="POST"
  >
    @csrf
    @method('PATCH')
    <div
      class="form-group"
      style="margin-bottom: 1em"
    >
      <h3>attemp to change category name: {{ $category->name }}</h3>
      <label for="exampleInputEmail1">New name</label>
      <input
        type="text"
        name="name"
        class="form-control"
        id="exampleInputEmail1"
        aria-describedby="emailHelp"
        placeholder="Enter New Name"
      >
      @error('name')
        <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    <button
      type="submit"
      class="btn btn-primary"
    >Submit</button>
  </form>
</x-admin.base>
