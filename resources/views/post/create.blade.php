
@extends('layouts.app')

@section('content')
    <div>
        <form action="{{route('post.store')}}" method="POST">
            @csrf
           
            <!-- <div class="form-group">
                <label for="title"></label>
                <input type="text" class="form-control" id="title" value="" name="title" placeholder="Enter title">
            </div> -->
<!--             <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" name="content" rows="6"></textarea>
            </div> -->
            <text-input name="title" placeholder="Enter Title">Title</text-input>
            <text-area name="content" placeholder="Enter Content" rows="6">Content</text-area>
            <radio-select> </radio-select>


          </div>

            <a href="{{route('post.create')}}" class='btn'>Create</button>
            <a href="{{route('post.index')}}" class='btn'>Cancel</a>
        </form>
    </div>



    @endsection


