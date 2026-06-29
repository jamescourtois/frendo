@extends('_layouts.main')

@section('body')
		<x-header reverse="true">
			<x-slot name="h1">
				Field Notes
			</x-slot>
			<x-slot name="h2">
				Category: {{$page->title}}
			</x-slot>
			<x-slot name="desc">
				<a href="/blog">&LeftArrow; Back to All Articles</a>
			</x-slot>
		</x-header>		


		<x-blog-wrapper :odd="$page->posts($posts)->count() % 2 == 1">
			@foreach ($page->posts($posts) as $post)
					@include('_components.post-preview-inline')
			@endforeach
		</x-blog-wrapper>
@stop
