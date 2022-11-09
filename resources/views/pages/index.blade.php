<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body>
<div className="blog-details">
<nav class="navbar">
     
      <div class="links">
      <h1>Papschulo Blog</h1>
        <a href="{{route('blog.create')}}"> Add Blog</a>
      </div>
    </nav>
@foreach ($blogs as $blog)
        <article class='ms-5 mt-5'>
          <h2 class='heading'>{{$blog->title}}</h2>
          <p>Written by {{$blog->author}}</p>
          <div>{{$blog->description}}</div>
          <a  class='ms-5 fs-4' href="{{route('blog.edit', $blog->id)}}" class="blog-post_cta"><i class="bi bi-pen text-info"></i></a>
          <form  action="{{route('blog.destroy', $blog->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                   <button class="btn fs-3 " type="submit" id="delete" class="btn btn-danger"><i class="bi bi-trash text-danger"></i></button>
                  </form>
        </article>
      
    @endforeach

    </div>
</body>
</html>