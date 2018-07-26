<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/min.css">
  </head>
  <body>
      
      <div class="bg-info text-white p-5 mt-3">

        <a href="{{route('posts.index')}}" class="btn btn-secondary">Home</a>
        <a href="{{route('posts.create')}}" class="btn btn-secondary">Create a post</a>

      </div>
      <div class="container">
        @yield('content')

      </div>


  </body>
</html>
