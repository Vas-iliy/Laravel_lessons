@extends('layouts.layout')

@section('title')@parent :: {{$title}} @endsection

@section('content')
    <div class="container">

        <form class="mt-5" method="post" action="{{ route('post.store') }}">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Title" name="title" value="{{old('title')}}">
                @error('title')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Content</label>
                <textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="5" placeholder="Content">{{old('content')}}</textarea>
                @error('content')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Rubric</label>
                <select class="form-control @error('rubric_id') is-invalid @enderror" name="rubric_id">
                    <option>Select Rubric</option>
                    @foreach($rubrics as $k => $v)
                        <option value="{{$k}}"
                        @if(old('rubric_id') == $k)
                            selected
                        @endif
                        >{{$v}}</option>
                    @endforeach
                </select>
                @error('rubric_id')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
