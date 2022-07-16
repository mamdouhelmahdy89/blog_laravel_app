@extends('layouts.app')


@section('content')


<div class="container" style="margin-top: 3%">


    <div class="row" >

      <div class="col" >
        <div class="card" >
            <img src="{{URL::asset( $post->photo) }}" class="card-img-top" alt="{{ $post->photo }}">
            <div class="card-body">
              <h5 class="card-title">{{ $post->title }}</h5>
              <p class="card-text">{{ $post->content }}</p>
              <p style="color: red"> created at: {{ $post->created_at->diffForhumans() }}</p>
              <p style="color: red"> updated at: {{ $post->updated_at->diffForhumans() }}</p>

                    @foreach ($tags as $item)

                       <label for="">{{ $item->tag }}</label> -
                    @endforeach
                    <br> <br>

              <a href="{{ route('posts') }}" class="btn btn-primary">All Posts</a>
            </div>
          </div>
      </div>
    </div>
  </div>

@endsection
