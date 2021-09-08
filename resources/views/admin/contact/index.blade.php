<x-admin.base>
  <div>
    <a
      href="{{ route('contact.create') }}"
      class="btn btn-primary"
      style="margin-bottom: 1em"
    >Add new Contact</a>
  </div>
  <div class="card">
    <div class="card-header">All Contacts</div>
    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">location</th>
            <th scope="col">email</th>
            <th scope="col">phone</th>
            <th scope="col">actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($contacts as $contact)
            <tr>
              <th scope="row">{{ $loop->index }}</th>
              <th>{{ $contact->location }}</th>
              <th>{{ $contact->email }}</th>
              <th>{{ $contact->phone }}</th>
              <th>
                <form
                  action="/admin/contact/{{ $contact->id }}"
                  method="POST"
                >
                  @csrf
                  @method('DELETE')
                  <button
                    type="submit"
                    class="btn btn-danger"
                  >delete</button>
                </form>
              </th>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</x-admin.base>