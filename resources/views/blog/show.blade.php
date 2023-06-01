@extends('layouts.app')
@section('content')
    <section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
        <h1>my <span>blog</span></h1>
        <span class="title-bg">posts</span>
    </section>
    <!-- Page Title Ends -->
    <!-- Main Content Starts -->
    <section class="main-content revealator-slideup revealator-once revealator-delay1">
        <div class="container">
            <div class="row">
                <!-- Article Starts -->
                <article class="col-12">
                    <!-- Meta Starts -->
                    <div class="meta open-sans-font">
                        <span><i class="fa fa-user"></i> {{ $blog->author }}</span>
                        <span class="date"><i class="fa fa-calendar"></i> {{ $blog->created_at->format('M D Y') }}</span>
                        <span><i class="fa fa-tags"></i> {{ $blog->type }}</span>
                    </div>
                    <!-- Meta Ends -->
                    <!-- Article Content Starts -->
                    <h1 class="text-uppercase text-capitalize">{{ $blog->title }}</h1>
                    <img src="{{ asset('assets') }}/img/blog/blog-post-{{ $blog->id }}.jpg" class="img-fluid"
                        alt="Blog image" />
                    <div class="blog-excerpt open-sans-font pb-5">
                        <p>{{ $blog->a_content }}</p>

                    </div>
                    <!-- Article Content Ends -->
                </article>
                <!-- Article Ends -->
            </div>
        </div>
    </section>
@endsection
