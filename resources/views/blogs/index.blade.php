@extends('layouts.app')

@section('content')

<h1>blogs</h1>
@if(count($blogs) > 0)

    <div class="well">
        <div class="row">     
            @foreach($blogs as $blog) <span class="col-md-4 col-sm-4">
                   <a href="/blog/{{$blog->id}}">
                    <img src="{{$blog->imageView}}" style="width: 100%" alt="">
                    <small>{{$blog->tags}} • {{$blog->readTime}} min read</small>
                     <h4 class="mb-4">{{$blog->title}}</h4>
                   
           </a>
                    <small>Written on {{$blog->publishTime}}</small>
                </span>
            @endforeach
        </div>
    </div>
    {{$blogs->links()}}
@else
    <p>No blogs found</p>
@endif
@endsection