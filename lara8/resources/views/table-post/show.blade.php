@extends('partial.ind')
@section('title')
    Show Data
@endsection

@section('content')


<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Tables</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <a href="{{route('post.create')}}" class="btn btn-primary mb-3">Create New Data</a>

    
    <h2>Show Post ID =>{{$post->id}}</h2>
    <h4>Title =>{{$post->title}}</h4>
    <p> Body => {{$post->body}}</p>
    <p>User => {{$post->user->name}}</p>
    <p>User_ID => {{$post->user->id}}</p>
        <div>
            Tags = 
            @forelse ($post->tags as $tag)
                <button class="btn btn-dark btn-sm">{{$tag->tag_name}}</button>
                @empty
                  No tags  
            @endforelse
        </div>
        <br>
        <br>
        <br>
    
    <a href="{{route('post.index')}}" class="btn btn-primary btn-m">Back</a>
    </div>
</div>
@endsection