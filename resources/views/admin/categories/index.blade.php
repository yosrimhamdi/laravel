<x-admin.base>
  @if (count($categories))
    <div
      class="card"
      style="margin-bottom: 2em;"
    >
      <div class="card-header">All Categories</div>
      <div class="card-body">
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
      </div>
      <div>{{ $categories->links() }}</div>
    </div>
  @endif
  @if (count($trashedCategories))
    <div class="card">
      <div class="card-header">Trashed Categories</div>
      <div class="card-body">
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
            @foreach ($trashedCategories as $category)
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
                    href="/admin/categories/restore/{{ $category->id }}"
                    class="btn btn-info"
                    style="color: white;"
                  >restore</a>
                  <a
                    href="/admin/categories/delete/{{ $category->id }}"
                    class="btn btn-danger"
                  >perm delete</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  @endif
  <div class="col-md-4">
    @if (Auth::user())
      <div class="card">
        <div class="card-header">Add New Category</div>
        <div class="card-body">
          <form
            action="/categories"
            method="POST"
          >
            @csrf
            <div
              class="form-group"
              style="margin-bottom: 1em"
            >
              <label for="exampleInputEmail1">Category Name</label>
              <input
                type="text"
                name="name"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Enter email"
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
        </div>
      </div>
    @endif
  </div>
</x-admin.base>
