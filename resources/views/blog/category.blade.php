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
                            @if(Session::get('success'))
                            <div class="alert alert-success">
                                    {{ Session::get('success') }}
                            </div>
                        @endif
                        @if(Session::get('fail'))
                            <div class="alert alert-danger">
                                    {{ Session::get('fail') }}
                            </div>
                        @endif
                        <form method="post" action="add">
                        @csrf
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Insert your category here." aria-label="Enter search term..." aria-describedby="button-search" name="add_cat" required  />
                                <button class="btn btn-primary" id="button-search" type="submit" name="btn_add_cat">Add Category</button>
                            </div>
                        </form>
                    </div>
                    <!-- Submitted messages -->
                    <section>
                        @if(session()->has('message'))
                        <div class="alert alert-info">
                        {{ session('message') }}
                        </div>
                        @endif
                        @if(isset($cat))
                            @if(session()->has('message'))
                                sgfdfdg
                            @else
                                <form method="post" action="{{url('update')}}">
                                @csrf
                                    <div class="input-group">
                                    <input class="form-control" type="text" aria-label="Enter search term..." aria-describedby="button-search" name="update_cat" value="{{ $cat->name }}" required  />
                                    <input type="hidden" name="cat_id" value="{{ $cat->id }}">
                                    <button class="btn btn-info" id="button-search" type="submit" name="btn_update_cat">Update</button>
                                    </div>
                                </form>
                            @endif
                            
                        @endif
                        <div class="card mb-2">
                            
                            <div class="card-body">
                                @foreach($cat_types as $values) 
                                    <li class="list-group-item">                                       
                                        {{ $values->name }}
                                        <input type="hidden" name="cat_id" value="{{ $values->id }}">
                                        <input type="hidden" name="cat_name" value="{{ $values->name }}">
                                        
                                        <a href="{{url('/update/'.$values->id) }}" class="btn btn-warning" role="button">UPDATE</a>

                                        <a href="{{url('/delete/'.$values->id) }}" class="btn btn-danger" role="button">DELETE</a>
                                    </li>
                                @endforeach  
                             
                            </div>
                        </section>
                    </div>
                <div class="col-lg-4"></div>
            </div>
        </div>


@endsection            
