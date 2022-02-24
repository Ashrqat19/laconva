@extends('layouts.app')

@section('content')
<div>
    <a href="/blog" style="background-color:rgb(187, 187, 255)" class="btn btn-default ">Go Back</a>
</div>

<small>
    <span style="color:blue">{{$blog->tags}}</span>
    • {{$blog->readTime}} min read
</small>
<h1>{{$blog->title}}</h1>
<img style="width:50%" src="{{$blog->imageView}}">
<br><small>Written on {{$blog->publishTime}}</small><br><br> 
<div>
    {!!$blog->blogBody!!}<br><br><br>
</div>
<hr>
<br>
<div>
    <div class="row">
        <div class="col">
            <h1>Stay in the know</h1>
            <span class="col-4">Get the latest product and management insights.</span>
        </div>
        <div class="col">
            <div class="row">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Recipient's username"
                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2">@gmail.com</span>
                </div>
            </div>
            <div class="row">
                <div class="col-8">

                </div>
                <button type="submit" class="col ms-5 mb-3 btn btn-primary">Submit</button>
            </div>
        </div>
    </div>



    <hr>
    {{-- @if(!Auth::guest())
    @if(Auth::user()->id == $blog->user_id)
    <a href="/blogs/{{$blog->id}}/edit" class="btn btn-default">Edit</a>

    {!!Form::open(['action' => ['BlogController@destroy', $blog->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
    @endif
    @endif --}}


<br><br>
    <h3>Related Posts</h3>
    <div class="well">
        <div class="row">
            @foreach($blogsRelated as $blog) <span class="col-md-4 col-sm-4">
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






<br><br><br>
<div class="section light-grey wf-section" >
    <div class="container w-container " >
        <div class="cta-box" style="background-image: url('https://assets.website-files.com/613f0b40fb5722f91cdd6b5b/6147ecf9939d3c2029414210_Blog%20Cover-5.svg')">
            
            <div style="background-color:#09144770" class="container p-5"><div class="text-box center-align">
                <h2 class="heading h1">Stay in the know</h2>
                <p class="paragraph large">Get the latest product and management insights every week. Straight to
                    your inbox.</p>
                <div class="spacer _16"></div>
                <div class="email-form center-align w-form">
                    <form id="wf-form-Subscribe-Form" name="wf-form-Subscribe-Form" data-name="Subscribe Form" method="get"
                        class="email-form">
                        <div class="email-subscribe"><input type="email" class="text-input no-margin w-input" maxlength="256"
                                name="Email-2" data-name="Email 2" placeholder="Enter your email" id="Email-2" required="" />
                            <div class="spacer _16"></div><input type="submit" value="Subscribe" data-wait="Please wait..."
                                class="button dark no-margin w-button" />
                        </div>
                    </form>
                    <div class="form-success dark w-form-done">
                        <div>You&#x27;re all signed up.</div>
                    </div>
                    <div class="w-form-fail">
                        <div>Oops! Something went wrong while submitting the form.</div>
                    </div>
                </div>
            </div></div>             
        </div>
    </div>
</div>


 @endsection