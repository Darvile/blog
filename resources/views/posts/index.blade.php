@extends('main')

@section('title', '| All Post')

@section('content')
<div class="row">
	<div class="col-md-10">
		<h1>All posts</h1>
	</div>
	<div class="col-md-2">
		<a style="margin-top: 28px;" href="{{ route('posts.create') }}" class="btn btn-block btn-primary">Create new post</a>
	</div>
	<div class="col-md-12">
		<hr>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<th>#</th>
				<th>Title</th>
				<th>Body</th>
				<th>Created at</th>
			</thead>

			<tbody>
				@foreach($posts as $post)
					<tr>
						<th>{{ $post->id }}</th>
						<td>{{ substr($post->title, 0, 50) }} {{ strlen($post->title) > 50 ? "..." : "" }}</td>
						<td>{{ substr($post->body, 0, 50) }} {{ strlen($post->body) > 50 ? "..." : "" }}</td>
						<td>{{ date('M j Y', strtotime($post->created_at)) }}</td>
						<td>
							<a href="{{ route('posts.show', $post->id) }}" class="btn btn-default btn-sm">View</a>
							<a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default btn-sm">Edit</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>

		<div class="text-center">
			{!! $posts->links(); !!}
		</div>
	</div>
</div>
@endsection
