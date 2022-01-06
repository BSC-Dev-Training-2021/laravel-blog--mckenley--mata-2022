@extends('layouts.master')

@section('content')
<!-- Page header with logo and tagline-->
<header class="py-5 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">Welcome to Blog Home!</h1>
            <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
        </div>
    </div>
</header>
<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Featured blog post-->
                    @php ($blog_val = 1)
                    @foreach ($blog_post as $value)
                    @if ($blog_val === 1)

                        <div class="card mb-4">
                            <a href="#!"><img class="card-img-top" src="{{ $value->img_link }}" alt="..." /></a>
                            <div class="card-body">
                                <div class="small text-muted">{{ $value->date_created }}</div>
                                <h2 class="card-title">{{ $value->title }}</h2>
                                <p class="card-text">{{ $value->description }}</p>
                                <form method="post">
                                    <a class="btn btn-primary" href="article/{{ $value->id }}">Read more →</a>
                                </form>
                            </div>
                        </div>
                    <!-- Nested row for non-featured blog posts--> 
                        @php ($blog_val = 2)
                    @else
                        <div class="col-lg-6">
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="{{ $value->img_link }}" alt="..." /></a>
                                <div class="card-body"> 
                                    <div class="small text-muted">{{ $value->date_created }}</div>
                                    <h2 class="card-title h4">{{ $value->title}}</h2>
                                    <p class="card-text">{{ $value->description}}</p>
                                    <a class="btn btn-primary" href="article/{{ $value->id }}">Read more →</a>
                                </div>
                            </div>
                            <!-- Blog post-->
                        </div>

                    @endif
                    @endforeach
@include('partials.pagination')
@endsection
