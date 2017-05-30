@extends('main')

@section('title', '| Create new Post')

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-4">
			<h1>Create new Post</h1>

			{!! Form::open(array('route' => 'posts.store')) !!}
				{{ Form::label('title', 'Title:') }}
				{{ Form::text('<title></title>', null, array('class' => 'form-control')) }}

				{{ Form::label('body', 'Post Body:') }}
				{{ Form::textarea('body', null, array('class' => 'form-control', 'style' => 'margin-bottom: 20px')) }}

				{{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block'))}}


			{!! Form::close() !!}
		</div>
	</div>
@endsection
