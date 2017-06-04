@extends('main')

@section('title', '| View Post')

@section('content')
<div class="row">
	<div class="col-md-8">
		<h1>{{ $post->title }}</h1>
		<p class="lead">{{ $post->body }}</p>	
	</div>
	<div class="col-md-4">
		<dl class="dl-horizotal">
			<dt>Created at:</dt>
			<dd>{{ date('M, j, Y h: ia', strtotime($post->created_at)) }}</dd>
		</dl>

		<dl class="dl-horizotal">
			<dt>Last Updated:</dt>
			<dd>{{ date('M, j, Y h: ia', strtotime($post->updated_at)) }}</dd>
		</dl>

		<hr>
		<div class="row">
			<div class="col-sm-6">
				<a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary btn-block">
					Edit
				</a>
			</div>

			<div class="col-sm-6">
				<a href="{{ route('posts.destroy', $post->id) }}" class="btn btn-danger btn-block">
					Delete
				</a>
			</div>
		</div>
	</div>
</div>
@endsection
