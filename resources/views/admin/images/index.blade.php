@include('admin.images.styles')

<x-base title="Images">
  <div style="display: flex;">
    <div class="images-container">
      @foreach ($images as $image)
        <div class="card" style="width: 15rem;">
          <img class="card-img-top" src="{{ $image->src }}" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">{{ $image->created_at->diffForHumans() }}</p>
          </div>
        </div>
      @endforeach
    </div>
    <form action="/pics" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group" style="margin-bottom: 1em;">
        <h4>Select And Upload Image(s)</h4>
        <input type="file" name="images[]" multiple accept="image/*" class="form-control-file"
          id="exampleFormControlFile1">
        @error('images')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary mb-2">Upload</button>
    </form>
  </div>
</x-base>
