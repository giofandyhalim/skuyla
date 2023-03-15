@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">{{ auth()->user()->name }} Post</h1>
</div>

@if (session()->has('success'))
  <div class="alert alert-success col-lg-7" role="alert">
    {{ session('success') }}
  </div>
@endif
@if (session()->has('warning'))
  <div class="alert alert-warning col-lg-7" role="alert">
    {{ session('warning') }}
  </div>
@endif

<div class="table-responsive col-lg-7">
    <a href="/dashboard/posts/create" class="btn btn-dark mb-2">Add new post</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">NIK</th>
          <th scope="col">Nama</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Alamat</th>
          <th scope="col">Keterangan</th>
          <th scope="col">Hasil PCR</th>
          <th scope="col">Hasil Antigen</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($posts as $post)
          
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $post->title }}</td>
          <td>{{ $post->category->name }}</td>
          <td>
              <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-primary text-decoration-none">More</a>
              <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning text-decoration-none">Edit</a>
              <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger text-decoration-none border-0" onclick="return confirm('Apakah kamu yakin ingin menghapus?')">Delete</button>
              </form>
          </td>
        </tr>

        @endforeach

      </tbody>
    </table>
  </div>

@endsection