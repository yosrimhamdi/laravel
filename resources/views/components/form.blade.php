<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group" style="margin-bottom: 1em">
      <label for="exampleInputEmail1">Brand Name</label>
      <input type="text" value="{{ $brand->name ?? '' }}" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Brand Name">
      @error('name')
        <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>
    <div class="form-group" style="margin-bottom: 1em">
      <label for="exampleFormControlFile1">Choose A New Brand Image</label>
      <input type="file" name="image" accept="image/*" class="form-control-file" id="exampleFormControlFile1">
      @error('image')
        <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>