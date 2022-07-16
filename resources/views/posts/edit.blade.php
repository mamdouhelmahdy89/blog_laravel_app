@extends('layouts.app')


@section('content')


<div class="container" style="margin-top: 3%">
    <div class="row">
      <div class="col">
        <div class="jumbotron" style="background-color: rgb(255, 249, 249);height:140px">
            <h1 class="display-4">Edit Post</h1>
            <a class="btn btn-warning" href="{{ route('posts') }}">All Posts</a>

        </div>
      </div>

    </div>

    <div class="row">

        @if (count($errors) > 0)

          <ul>
              @foreach ($errors->all() as $item)
                  <li>{{  $item }}</li>
              @endforeach
          </ul>

        @endif
      <div class="col">
        <form action="{{ route('post.update', ['id' => $post->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="exampleFormControlInput1">Title</label>
              <input type="text" name="title" value="{{ $post->title }}" class="form-control" >
            </div><br>
            <div class="form-group">

                @foreach ($tags as $item)
                   <input type="checkbox" name="tags[]" value="{{ $item->id }}"

                      @foreach ($post->tag as $item2)

                       @if ($item->id == $item2->id)

                           checked

                       @endif

                      @endforeach
                   >
                   <label for="">{{ $item->tag }}</label>
                @endforeach

            </div><br>

            <div class="form-group">
              <label for="exampleFormControlTextarea1">Content</label>
              <textarea class="form-control"  name="content" rows="3">
                  {{ $post->content }}
              </textarea>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">photo</label>
                <input type="file" name="photo" class="form-control" >
            </div><br>

            <div class="form-group">
                <button class="btn btn-danger" type="submit">update</button>
            </div>
          </form>
      </div>
    </div>
  </div>

@endsection
