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
            <!-- Articles Starts -->
            <div class="row">
                @foreach ($blogs as $blog)
                    <!-- Article Starts -->
                    <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-30">
                        <article class="post-container">
                            <div class="post-thumb">
                                <a href="{{ url('/blog/show', $blog->id) }}"
                                    class="d-block position-relative overflow-hidden">
                                    <img src="{{ asset('assets') }}/img/blog/blog-post-{{ $blog->id }}.jpg"
                                        class="img-fluid" alt="Blog Post">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="entry-header">
                                    <h3><a href="{{ url('/blog/show', $blog->id) }}">{{ $blog->title }}</a>
                                    </h3>
                                </div>
                                <div class="entry-content open-sans-font">
                                    <p>{!! Str::limit($blog->a_content, 100) !!}
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                @endforeach
                <!-- Article Ends -->

                <!-- Pagination Starts -->
                <div class="col-12 mt-4">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center mb-0">
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Pagination Ends -->
            </div>
            <!-- Articles Ends -->
        </div>

    </section>
@endsection
