@extends('layouts.layout')

@section('title')@parent :: Login @endsection

@section('header')
    @parent
@endsection
@section('content')
    <div class="container">
        <form method="post" action="{{route('login')}}">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input type="email" value="{{old('email')}}" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>
@endsection
