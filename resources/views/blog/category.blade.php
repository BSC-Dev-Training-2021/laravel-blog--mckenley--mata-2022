@extends('layouts.master')
@section('content')
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
                    <div class="card mb-4">
                        <form method="post" action="category.php">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Insert your category here." aria-label="Enter search term..." aria-describedby="button-search" name="add_cat" required  />
                                <button class="btn btn-primary" id="button-search" type="submit" name="btn_add_cat">Add Category</button>
                            </div>
                        </form>
                    </div>
                    <!-- Submitted messages -->
                    <section>
                        <div class="card mb-2">
                            
                            <div class="card-body">
                                <form method="get">
                                    @foreach($cat_types as $values)
                                    <li class="list-group-item">
                                        
                                            {{ $values->name }}
                                            <input type="hidden" name="cat_id" value="{{ $values->id }}">
                                            <button type="submit" class="btn btn-warning float-right" name="update-btn">Update</button>
                                            <button type="submit" class="btn btn-danger float-right" name="btn-delete">Delete</button>
                                        
                                    </li>
                                    @endforeach
                                </form>  
                            </div>
                            
                        </div>
                    </section>
                </div>
                <div class="col-lg-4"></div>
            </div>
        </div>
@endsection            
