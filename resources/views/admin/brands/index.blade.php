<x-admin.base>
  <div style="display:flex;">
    <div style="margin-right: 2em; flex-shrink: 0;">
      <div class="card">
        <div class="card-header">All Brands</div>
        <div class="card-body">
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
        </div>
      </div>
    </div>
    <x-admin.form
      action="/admin/brands"
      title="Add New Brand"
      method="POST"
    />
  </div>
</x-admin.base>
