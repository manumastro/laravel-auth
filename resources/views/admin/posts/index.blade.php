@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="d-inline mb-4">Tutti i post</h1>
    <a class="btn btn-info d-flex align-items-center float-right mb-4" href="{{ route('admin.posts.create') }}">Crea un Post</a>
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
                    <td>
                      <a class="btn btn-success" href="{{ route('admin.posts.show', $post) }}">SHOW</a>
                    </td>
                </tr>                
            @endforeach
        </tbody>
      </table>
      {{ $posts->links() }}
</div>
@endsection
