@extends('layouts.layout')

@section('title')@parent :: Send Mail @endsection

@section('header')
    @parent
@endsection
@section('content')
    <div class="container">
        <form method="post" action="{{route('send')}}">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Name</label>
                <input type="text" value="{{old('name')}}" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input type="email" value="{{old('email')}}" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Message</label>
                <textarea class="form-control"  name="text" rows="5">{{old('text')}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>
@endsection
