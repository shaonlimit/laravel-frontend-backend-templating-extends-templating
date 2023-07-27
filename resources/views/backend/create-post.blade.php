@extends('backend.master')
@section('content')
<div class="container mt-4">
    <h2>Create a Post</h2>

        <form>
            <div class="mb-3">
              <label for="postTitle" class="form-label">Title</label>
              <input type="text" class="form-control" id="postTitle" placeholder="Enter the title" required>
            </div>
            <div class="mb-3">
              <label for="postContent" class="form-label">Content</label>
              <textarea class="form-control" id="postContent" rows="5" placeholder="Enter the content" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

  </div>






@endsection
