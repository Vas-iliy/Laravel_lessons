@extends('layouts.layout')

@section('title')@parent :: {{$title}} @endsection

@section('content')
    <div class="container">
        <form class="mt-5" method="post" action="{{ route('post.store') }}">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Title</label>
                <input type="text" class="form-control" placeholder="Title" name="title">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Content</label>
                <textarea class="form-control" name="content" rows="5" placeholder="Content"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Rubric</label>
                <select class="form-control" name="rubric_id">
                    <option>Select Rubric</option>
                    @foreach($rubrics as $k => $v)
                        <option value="{{$k}}">{{$v}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
