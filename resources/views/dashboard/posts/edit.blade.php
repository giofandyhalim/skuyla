@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit your post</h1>
  </div>


<div class="col-lg-8">
  <form method="post" action="/dashboard/posts/{{ $post->slug }}" class="mb-4">
    @method('put')
    @csrf 
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title', $post->title) }}">
      @error('title')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug', $post->slug) }}">
      @error('slug')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="category" class="form-label">Category</label>
      <select class="form-select" name="category_id">
        @foreach ($categories as $category)
        @if (old('category_id', $post->category_id) == $category->id)
          <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
        @else
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endif
        @endforeach
      </select>
    </div>
    <div class="mb-3">
      <label for="body" class="form-label">Body</label>
      @error('body')
          <p class="text-danger">{{ $message }}</p>
      @enderror
      <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
      <trix-editor input="body"></trix-editor>
    </div>

    <button type="submit" class="btn btn-dark">Update</button>
  </form>
</div>

<script>
  document.addEventListener('trix-file-accept', function(e) [
    e.preventDefault();
  ])
</script>

@endsection