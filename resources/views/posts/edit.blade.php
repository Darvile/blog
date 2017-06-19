@extends('main')

@section('title', '| Edit Blog Post')

@section('content')
<form method="POST" action="{{ route('posts.update', $post->id) }}">
	<div class="row">
		<div class="col-md-8">
			<label for="">Title</label>
			<input class="form-control" name="title" type="text" value="{{ $post->title }}">
			<label for="">Slug</label>
			<input class="form-control" name="slug" type="text" value="{{ $post->slug }}">
			<label for="">Body</label>
			<textarea class="form-control" name="body">
				{{ $post->body }}
			</textarea>
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
					<a href="{{ route('posts.show', $post->id) }}" class="btn btn-danger btn-block">
						Cancel
					</a>
				</div>

				<div class="col-sm-6">
					<input type="hidden" name="_token" value="{{ Session::token() }}">
              		{{ method_field('PUT') }}
					<input class="btn btn-primary btn-block" type="submit" value="Save changes" />
				</div>
			</div>
		</div>
	</div>
</form>
@endsection
