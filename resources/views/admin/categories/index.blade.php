<x-admin.base
  table-title="All categories"
  form-title="Add new Category"
>


  <x-slot name="table">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">user name</th>
          <th scope="col">category name</th>
          <th scope="col">date</th>
          <th scope="col">actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $category)
          <tr>
            <td>{{ $category->user->name }}</td>
            <td>{{ $category->name }}</td>
            <td>
              @if ($category->created_at)
                {{ $category->created_at->diffForHumans() }}
              @endif
            </td>
            <td>
              <a
                href="/admin/categories/{{ $category->id }}/edit"
                class="btn btn-info"
                style="color: white;"
              >edit</a>
              <form
                action="/admin/categories/{{ $category->id }}"
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
      action="{{ url('/admin/categories') }}"
      method="POST"
    >
      @csrf
      <div class="form-group">
        <label for="exampleInputEmail1">Category Name</label>
        <input
          type="text"
          name="name"
          class="form-control"
          id="exampleInputEmail1"
          aria-describedby="emailHelp"
          placeholder="Enter email"
        >
        <x-admin.error for="name" />
      </div>
      <button
        type="submit"
        class="btn btn-primary"
      >Submit</button>
    </form>
  </x-slot>
</x-admin.base>
