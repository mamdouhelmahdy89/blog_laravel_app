@extends('layouts.app')


@section('content')


<div class="container" style="margin-top: 3%">
    <div class="row">
      <div class="col">
        <div class="jumbotron" style="background-color: rgb(255, 249, 249);height:140px">
            <h1 class="display-4">Create Tags</h1>
            <a class="btn btn-warning" href="{{ route('tags') }}">All Tags</a>

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
        <form action="{{ route('tag.store') }}" method="POST">
            @csrf

            <div class="form-group">
              <label for="exampleFormControlInput1">Name</label>
              <input type="text" name="tag" class="form-control" >
            </div><br>

            <div class="form-group">
                <button class="btn btn-danger" type="submit">Create Tags</button>
            </div>
          </form>
      </div>
    </div>
  </div>

@endsection
