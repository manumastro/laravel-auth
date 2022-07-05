@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tutti i post</h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Titolo</th>
          <th scope="col">Azioni</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
          <tr>
            <th scope="row">{{ $post->id }}</th>
            <td>{{ $post->title }}</td>
            <td>{{ $post->content }}</td>
            <td>XXX</td>
          </tr>
        @endforeach

      </tbody>
    </table>
    
</div>
@endsection
