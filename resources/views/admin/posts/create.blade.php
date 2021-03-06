@extends('layouts.admin')

@section('content')
  <div class="container">
    <h1>Crea Un Post</h1>

    @if ($errors->any())
      <div class="alert alert-danger" role="alert">
        <ul class="m-0 p-0">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('admin.posts.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Titolo</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
      value="{{ old('title') }}">
      @error('title')
        <p class="text-danger"> {{ $message }}</p>
      @enderror
    </div>
    <div class="mb-3 d-flex flex-column">
      <label for="content" class="form-label">Contenuto</label>
      <textarea class="form-control @error('title') is-invalid @enderror" name="content" id="content" cols="30" rows="10">{{ old('content') }}</textarea>
      @error('content')
        <p class="text-danger"> {{ $message }} </p>
        
      @enderror
    </div>

    <button type="submit" class="btn btn-primary">Invia</button>
  </form>
  </div>
@endsection