@extends('layouts.app')


@section('content')


<div class="container" style="margin-top: 3%">
    <div class="row">
      <div class="col">
        <div class="jumbotron" style="background-color: rgb(255, 249, 249);height:140px">
            <h1 class="display-4">Create Post</h1>
            <a class="btn btn-warning" href="{{ route('posts') }}">All Posts</a>

        </div>
      </div>

    </div>

    <div class="row">

        @if (count($errors) > 0)

          <ul>
              @foreach ($errors->all() as $item)
              <div class="alert alert-danger" role="alert" style="margin-top: 10px">
                       {{ $item }}
              </div>
              @endforeach
          </ul>

        @endif
      <div class="col">
        <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
              <label for="exampleFormControlInput1">Title</label>
              <input type="text" name="title" class="form-control" >
            </div><br>

            <div class="form-group">

                @foreach ($tags as $item)
                   <input type="checkbox" name="tags[]" value="{{ $item->id }}" >
                   <label for="">{{ $item->tag }}</label>
                @endforeach

            </div><br>

            <div class="form-group">
              <label for="exampleFormControlTextarea1">Content</label>
              <textarea class="form-control" name="content" rows="3"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">photo</label>
                <input type="file" name="photo" class="form-control" >
            </div><br>

            <div class="form-group">
                <button class="btn btn-danger" type="submit">Create Post</button>
            </div>
          </form>
      </div>
    </div>
  </div>

@endsection
