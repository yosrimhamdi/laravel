<x-admin.base>
  @if (session('success'))
    <div
      class="alert alert-success alert-dismissible fade show"
      role="alert"
    >
      <span>{{ session('success') }}</span>
      <button
        type="button"
        class="close"
        data-dismiss="alert"
        aria-label="Close"
      >
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  @endif
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
                      href="/brands/edit/{{ $brand->id }}"
                      class="btn btn-info"
                      style="color: white"
                    >edit</a>
                    <a
                      href="/brands/delete/{{ $brand->id }}"
                      class="btn btn-danger"
                    >delete</a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
          {{ $brands->links() }}
        </div>
      </div>
    </div>
    <x-admin.form action="/brands" />
  </div>
</x-admin.base>
