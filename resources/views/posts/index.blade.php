

@extends('layouts.app')


@section('content')


<div class="container">
    <div class="row">
        <div class="col">
            <div class="jumbotron" style="background-color: rgb(255, 249, 249);height:140px">
                <h1 class="display-4">All Posts</h1>
                <a class="btn btn-warning" href="{{ route('post.create') }}">Create Posts</a>
                <a class="btn btn-danger" href="{{ route('posts.trashed') }}">Trashed <i class="fa-regular fa-trash-can"></i></a>
            </div>
        </div>
    </div>
    <div class="row">

          @if ($posts->count() > 0)

          <div class="col">
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">User</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>

                     @php
                         $i = 1;
                     @endphp
                     
                    @foreach ($posts as $item)
                        <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td>{{  $item->title }}</td>
                            <td>{{  $item->user->name }}</td>
                            <td>
                               <img src="{{URL::asset($item->photo)}}" alt="{{ $item->photo }}"
                               class="img-tumbnail" width="100" height="100">
                            </td>

                            <td>
                                <a class="text-success" href="{{ route('post.show' , ['slug' => $item->slug]) }}"><i class="fa-solid fa-2x fa-eye"></i></a>&nbsp;

                                <a href="{{ route('post.edit' , ['id' => $item->id]) }}"><i class="fa-solid fa-2x fa-pen-to-square"></i></a>&nbsp;
                                <a class="text-danger" href="{{ route('post.destroy' , ['id'=> $item->id]) }}"><i class="fa-solid fa-2x fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
              </table>

        </div>

          @else
           <div class="col">
                <div class="alert alert-danger" role="alert">
                    No Posts
                </div>
           </div>
          @endif

    </div>
</div>

@endsection






