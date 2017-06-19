@extends('main')

@section('title', '| Create new Post')

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-4">
			<h1>Create new Post</h1>

			<form method="POST" action="{{route('posts.store')}}" accept-charset="UTF-8">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<label for="title">Title:</label>
				<input class="form-control" name="title" type="text" id="title">
				
				<label for="title">Slug:</label>
				<input class="form-control" name="slug" type="text" id="title">

				<label for="body">Post Body:</label>
				<textarea class="form-control" style="margin-bottom: 20px" name="body" cols="50" rows="10" id="body"></textarea>

				<input class="btn btn-success btn-lg btn-block" type="submit" value="Create Post">
			</form>
		</div>
	</div>
@endsection
