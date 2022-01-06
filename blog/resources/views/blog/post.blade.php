@extends('layouts.master')
@section('content')
<!-- Page content-->
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8 align-self-start">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Contact Us header-->
                    <header class="mb-8">
                        <!-- Post title-->
                        <h1 class="fw-bolder mb-1">Create a new blog entry</h1>
                        <!-- Post meta content-->
                        <div class="text-muted fst-italic mb-3">Express your mind!</div>
                    </header>
                    <!-- Post content-->
                    <section class="mb-5">
                        <form action="{{ route('post') }}" method="get" enctype="multipart/form-data">
                            @csrf
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1" class="mb-1">Title</label>
                                        <input type="text" class="form-control mb-1" name="title" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1" class="mb-1">Description</label>
                                        <textarea class="form-control mb-1" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1" class="mb-1">Content</label>
                                        <textarea class="form-control mb-1" id="exampleFormControlTextarea1" rows="5" name="content"></textarea>
                                    </div>
                                    <div class="form-group">
                                        
                                            <input class="form-control mb-1" type="file" name="file" id="file" accept="image/x-png,image/gif,image/jpeg" >
                                            
                                    </div>
                                    <div class="form-group">
                                        <label class="mb-1 mt-3">Categories</label>
                                        <div class="row">
                                           
                                            
                                            @foreach ($category_types as $value) 
                                               
                                            <div class="col-lg-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="{{ $value->id }}" id="checkbox" name="{{ $value->name }}">
                                                    <label class="form-check-label" >
                                                        {{ $value->name }}
                                                    </label>
                                                </div>  
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-5" name="submit">Post</button>
                                </form>
                    </section>
                </div>
                <div class="col-lg-4"></div>
            </div>
        </div>
@endsection