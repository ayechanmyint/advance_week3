@extends('layouts.app')
@section('content')
<div class="container">
    <form action="{{route('post.update',$post->id)}}" method="POST">
        @method('PUT')
        @csrf

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{$post->title}}">
        </div>   

        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content"  class="form-control" cols="30" rows="10" >{{$post->content}}</textarea>
        </div> 

        <div class="form-group">
            <label for="is_public">Is Publish</label>
            <input type="radio" value="1" name="is_public" id="is_public" {{$post->is_public ? 'checked' : ''}}> Yes 
            <input type="radio" value="0" name="is_public" id="is_public" {{$post->is_public == null ? 'checked' : ''}}> No
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    
    </form>
</div>

@endsection




