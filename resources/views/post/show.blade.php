<div>
	<h2><a href="route('post.show')"></a> {{$post->title}}</h2>
	<p> Written By : {{$post->author->name}}</p>
	<p>{{$post->author->created_at}}</p>
	<p>Is Published Post : <strong>{{$post->is_public ? 'YES' : 'NO' }}</strong></p>
	<p> {!! nl2br($post->content) !!} </p>
	
</div>

<div class="row">
	<div class="col s4">
        <a href="{{route('post.edit',$post->id)}}" class="btn btn-primary">Edit</a>
    </div>
</div>

@if(!$post->is_public)
<form action="{{route('post.update',$post->id)}}" method="POST">
	@method("PUT")
	@csrf
	<!-- <input type="text" name="title">
	<input type="text" name="content"> -->
	<input type="hidden" name="is_public" value="1">
	 <button class="btn btn-primary" type="submit">Submit </button>
</form>

@endif
<a href="{{route('post.index')}}"> Back to Link </a>