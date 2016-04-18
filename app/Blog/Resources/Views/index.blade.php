@extends('layouts.main')

@section('content')

	@forelse($posts as $post)
		<article>
			<h2>{{ $post->title }}</h2>
			<small>Posted {{ date_from_now($post->published_at) }} by <a href="#">{{ $post->user->name }}</a>.</small>
			<p>{{ $post->extract }}</p>
		</article>
	@empty
		<p>There are no posts yet.</p>
	@endforelse
	
@endsection