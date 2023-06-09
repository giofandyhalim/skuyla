@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create your new post</h1>
  </div>


<div class="col-lg-8">
  <form method="post" action="/dashboard/posts" class="mb-4">
    @csrf 
    <div class="mb-3">
      <label for="title" class="form-label">NIK</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title') }}">
      @error('title')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="slug" class="form-label">Nama</label>
      <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
      @error('slug')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="alamat" class="form-label">Alamat</label>
      <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" required value="{{ old('alamat') }}">
      @error('alamat')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="slug" class="form-label">Mulai Gejala</label>
      <input type="date" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
      @error('slug')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
    
    <div class="mb-3">
      <label for="body" class="form-label">Keterangan</label>
      @error('body')
          <p class="text-danger">{{ $message }}</p>
      @enderror
      <input id="body" type="hidden" name="body" value="{{ old('body') }}">
      <trix-editor input="body"></trix-editor>
    </div>

    <div class="mb-3">
      <label for="category" class="form-label">Hasil PCR</label>
      <select class="form-select" name="category_id">
        @foreach ($categories as $category)
        @if (old('category_id') == $category->id)
          <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
        @else
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endif
        @endforeach
      </select>
    </div>
    <div class="mb-3">
      <label for="category" class="form-label">Hasil Antigen</label>
      <select class="form-select" name="category_id">
        @foreach ($categories as $category)
        @if (old('category_id') == $category->id)
          <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
        @else
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endif
        @endforeach
      </select>
    </div>
    

    <button type="submit" class="btn btn-dark">Create</button>
  </form>
</div>

<script>
  document.addEventListener('trix-file-accept', function(e) [
    e.preventDefault();
  ])
</script>

@endsection