@extends('layout')

@section('content')


    <div class="card">

      <div class="card-header">

        <h2>{{$post->title}}</h2>

      </div>

      <div class="card-body">

        {{$post->content}}

      </div>

    </div>






@endsection
