

@extends('layouts.app')


@section('content')


<div class="container">
    <div class="row">
        <div class="col">
            <div class="jumbotron" style="background-color: rgb(255, 249, 249);height:140px">
                <h1 class="display-4">All tags</h1>
                <a class="btn btn-warning" href="{{ route('tag.create') }}">Create tags</a>
            </div>
        </div>
    </div>
    <div class="row">

          @if ($tags->count() > 0)

          <div class="col">
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Actions</th>

                  </tr>
                </thead>
                <tbody>

                     @php
                         $i = 1;
                     @endphp

                    @foreach ($tags as $item)
                        <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td>{{  $item->tag }}</td>

                            <td>

                                <a href="{{ route('tag.edit' , ['id' => $item->id]) }}"><i class="fa-solid fa-2x fa-pen-to-square"></i></a>&nbsp;
                                <a class="text-danger" href="{{ route('tag.destroy' , ['id'=> $item->id]) }}"><i class="fa-solid fa-2x fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
              </table>

        </div>

          @else
           <div class="col">
                <div class="alert alert-danger" role="alert">
                    No tags
                </div>
           </div>
          @endif

    </div>
</div>

@endsection






