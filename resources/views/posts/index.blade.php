@extends('layout')

@section('content')

        <h1>All Posts</h1>

        @foreach($posts as $post)

          <div class="card">

            <div class="card-body mt-3">

              <a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a>

              <a href="{{route('posts.edit', $post->id)}}" class="btn btn-info">Edit</a>

              <form class="d-inline-block" action="{{route('posts.destroy', $post->id)}}" method="post">

                @csrf
                @method('delete')

                <button type="submit" name="button" class="btn btn-danger">Delete</button>

              </form>
            </div>

          </div>


        @endforeach
        {{$posts->links()}}
@endsection
