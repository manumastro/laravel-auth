@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>{{ $post->title }}</h1>
    <p>
      {{ $post->content }}
    </p>
    <a class="btn btn-primary " href="{{ route('admin.posts.index') }}">Torna All'elenco</a>
</div>
@endsection
