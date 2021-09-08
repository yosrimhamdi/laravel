<x-admin.base>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">User Name</th>
        <th scope="col">Email</th>
        <th scope="col">Subject</th>
        <th scope="col">Message</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($messages as $message)
        <tr>
          <th scope="row">{{ $message->user_name }}</th>
          <th>{{ $message->email }}</th>
          <th>{{ $message->subject }}</th>
          <th>{{ $message->message }}</th>
        </tr>
      @endforeach
    </tbody>
  </table>
</x-admin.base>
