@include('layouts.header')

<!-- Blog Section -->

<section id="blog">
     <div class="container">
          <div class="row">

               <div class="col-md-offset-1 col-md-10 col-sm-12">
                    <div class="blog-post-thumb">
                         <div class="blog-post-image">
                              <a href="single-post.html">
                                   <img src="../public/assets/images/blog-image1.jpg" class="img-responsive" alt="Blog Image">
                              </a>
                         </div>
                         <div class="blog-post-title">
                              <h3><a href="single-post.html">We Help You Create Perfect Modern Design</a></h3>
                         </div>
                         <div class="blog-post-format">
                              <span><a href="#"><img src="../public/assets/images/author-image1.jpg" class="img-responsive img-circle"> Jen Lopez</a></span>
                              <span><i class="fa fa-date"></i> July 22, 2017</span>
                              <span><a href="#"><i class="fa fa-comment-o"></i> 35 Comments</a></span>
                         </div>
                         <div class="blog-post-des">
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                              <a href="single-post.html" class="btn btn-default">Continue Reading</a>
                         </div>
                    </div>
               </div>

          </div>
     </div>
</section>



{{-- <section id="blog">
    <div class="container">
        <div class="row">

            <div class="col-md-offset-1 col-md-10 col-sm-12">
                @foreach($posts as $post)
                <div class="blog-post-thumb">
                    <div class="blog-post-image">
                        <a href="single-post.html">
                            <img src="{{ asset('assets/images/blog-image1.jpg') }}" class="img-responsive" alt="Blog Image">
                        </a>
                    </div>
                    <div class="blog-post-title">
                        <h3><a href="single-post.html">{{ $post->title }}</a></h3>
                    </div>
                    <div class="blog-post-format">
                        <span><a href="#"><img src="{{ asset('assets/images/author-image1.jpg') }}" class="img-responsive img-circle"> Jen Lopez</a></span>
                        <span><i class="fa fa-date"></i>{{ $post->updated_at }}</span>
                        <span><a href="#"><i class="fa fa-comment-o"></i> 35 Comments</a></span>
                    </div>
                    <div class="blog-post-des">
                        <p>{{ $post->description }}</p>
                        <a href="{{ route('posts.show', [$post->id]) }}" class="btn btn-default">Читай далее...</a>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</section> --}}

<!-- Footer Section -->

@include('layouts.footer')

{{--<!doctype html>--}}
{{--<html lang="ru">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>Посты</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--    <h1>Посты</h1>--}}
{{--    <ul>--}}
{{--        @foreach($posts as $post)--}}
{{--            <li>--}}
{{--                <h4>{{ $post->title }}</h4>--}}
{{--                <p>{{ $post->description }}</p>                --}}
{{--                <p>{{ $post->updated_at }}</p>--}}
{{--            </li>--}}
{{--        @endforeach--}}
{{--    </ul>--}}
{{--</body>--}}
{{--</html>--}}
