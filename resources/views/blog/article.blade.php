@extends('layouts.master')
@section('content')
<!-- Page content-->

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            <!-- Post content-->
            <article>
                <!-- Post header-->
                <header class="mb-4">
                    <!-- Post title-->
                   
                    <h1 class="fw-bolder mb-1">{{ $blog_post->title }}</h1>
                    <!-- Post meta content-->
                    <div class="text-muted fst-italic mb-2">Posted on {{ $blog_post->date_created}} by {{ $blog_post->created_by }}</div>
                    <!-- Post categories-->
                    @foreach($category as $values)
                    <a class="badge bg-secondary text-decoration-none link-light" href="#!">{{ $values->name }}</a>
                    @endforeach
                </header>
                <!-- Preview image figure-->
                <figure class="mb-4"><img class="img-fluid rounded" src="{{ $blog_post->img_link }}" alt="..." /></figure>
                <!-- Post content-->
                <section class="mb-5">
                    {{ $blog_post->content }}
                </section>
            </article>
            
            <!-- Comments section-->
            <section class="mb-5">
                <div class="card bg-light">
                    <div class="card-body">
                        <!-- Comment form-->
                        <form class="mb4" method="get" action="{{url('add') }}">
                            @csrf
                            <div>
                                <input type="hidden" name="blog_id" value="{{ $blog_post->id }}">
                                <textarea class="form-control mb-2" rows="3" placeholder="Join the discussion and leave a comment!" name="comment"></textarea>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary">Post Comment</button>
                            </div>
                        </form>

                        @foreach($comments as $values)
                        <!-- Single comment-->
                        <div class="d-flex">
                            <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                            <div class="ms-3">
                                <div class="fw-bold">{{ $values->name }}</div>
                                {{ $values->comment }}
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
@endsection