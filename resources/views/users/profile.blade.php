
@extends('layouts.app')

@section('content')

 @php
     $genderArray = ['Male' , 'Female'];
     $provinceArray = ['cairo' , 'alexanderia' , 'Giza' , 'Menofiaa'];

 @endphp


<div class="container" style="padding-top:4%;">



    @if (count($errors)> 0 )

    @foreach ($errors->all() as $item)

    <div class="alert alert-danger" role="alert">
         {{ $item }}
    </div>

    @endforeach

    @endif

    <form method="POST" action="{{ route('profile.update') }}">


       @csrf
       @method('PUT')
       <div class="form-group">
        <label for="exampleFormControlInput1">Name</label>
        <input type="text" class="form-control" name="name" value="{{ $user->name }}">
       </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">facebook</label>
          <input type="text" class="form-control" name="facebook" value="{{$user->profile->facebook }}">
        </div>

        <div class="form-group">
          <label for="exampleFormControlSelect1">gender</label>
          <select class="form-control" name="gender" >

             @foreach ($genderArray as $item)
              <option value="{{ $item }}" {{ ($user->profile->gender == $item) ? 'selected':' ' }}>{{ $item }}</option>
             @endforeach
          </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">province</label>
            <select class="form-control" name="province" >

               @foreach ($provinceArray as $item)
                <option value="{{ $item }}" {{ ($user->profile->province == $item) ? 'selected':' ' }}>{{ $item }}</option>
               @endforeach


            </select>
        </div>

        <div class="form-group">
          <label for="exampleFormControlTextarea1">Bio</label>
          <textarea class="form-control" name="bio" rows="3">
            {{ $user->profile->bio }}

          </textarea>
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">password</label>
            <input type="password" class="form-control" name="password">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Confirm password</label>
            <input type="password" class="form-control" name="c_password" >
        </div><br>

        <div class="form-group">
           <button class="btn btn-success" type="submit">Update</button>
        </div>
    </form>
</div>

@endsection
