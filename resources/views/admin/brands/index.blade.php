<x-admin.base
  table-title="All Brands"
  form-title="Add new Brand"
>
  <x-slot name="table">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">image</th>
          <th scope="col">name</th>
          <th scope="col">created_at</th>
          <th scope="col">actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($brands as $brand)
          <tr>
            <td><img
                src="{{ asset($brand->image) }}"
                alt="brand image"
                style="width: 150px; height 150px; object-fit:cover;"
              ></td>
            <td>{{ $brand->name }}</td>
            <td>{{ $brand->created_at->diffForHumans() }}</td>
            <td>
              <a
                href="/admin/brands/{{ $brand->id }}/edit/"
                class="btn btn-info"
                style="color: white"
              >edit</a>
              <form
                method="POST"
                action="/admin/brands/{{ $brand->id }}"
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
    {{ $brands->links() }}

  </x-slot>
  <x-slot name="form">
    <x-admin.form
      action="/admin/brands"
      title="Add New Brand"
      method="POST"
    />
  </x-slot>
</x-admin.base>
