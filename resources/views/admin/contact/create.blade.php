<x-admin.base>
  <form
    action="{{ route('contact.store') }}"
    method="POST"
  >
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Location</label>
      <input
        type="text"
        name="location"
        class="form-control"
        id="exampleInputEmail1"
        aria-describedby="emailHelp"
        placeholder="Enter email"
        value="{{ $contact->location }}"
      >
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Email</label>
      <input
        type="email"
        name="email"
        class="form-control"
        id="exampleInputPassword1"
        placeholder="Enter Email"
        value="{{ $contact->email }}"
      >
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Phone</label>
      <input
        type="text"
        name="phone"
        class="form-control"
        id="exampleInputPassword1"
        placeholder="Enter Phone"
        value="{{ $contact->phone }}"
      >
    </div>
    <button
      type="submit"
      class="btn btn-primary"
    >Submit</button>
  </form>
</x-admin.base>
