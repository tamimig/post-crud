@extends('layout')

@section('content')
      <h2 class="text-center">Update the Post</h2>

        @if($errors->all())

          <div class="alert alert-danger">

            @foreach($errors->all() as $error)
              <li>{{$error}}</li>

            @endforeach

          </div>

        @endif


    <form class="" action="{{route('posts.update', $post->id)}}" method="post">
        @csrf
        @method('put')
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" value="{{$post->title}}" class="form-control" >

      </div>


            <div class="form-group">
              <label for="content">Content</label>
              <textarea name="content" rows="5" cols="5" class="form-control">{{$post->content}}</textarea>

            </div>
            <div class="from-group text-center">
              <button type="submit" name="button" class="btn btn-outline-success">Update</button>

            </div>
    </form>

@endsection
