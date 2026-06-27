---
title: Field Notes
description: Learn more about the modern web from the perspective of an ethical indie web specialist.
pagination:
    collection: posts
    perPage: 8
---
@extends('_layouts.main')

@section('body')
	<x-header>
		<x-slot name="h1">
			Field Notes
		</x-slot>
		<x-slot name="h2">
			Knowledge is power.
		</x-slot>
		<x-slot name="desc">
			Frendo believes knowledge should be free. When you are armed with the facts, you are empowered to make the best choices. Check out the articles below to learn more about the modern web. If you don't see what you are looking for, <a @click="$store.visitor.cta = 'Fire away.'" href="/contact">ask questions here</a>.
		</x-slot>
	</x-header>

    <div class="mx-auto w-full grid grid-cols-1 lg:grid-cols-2 gap-1 py-1 bg-not-black dark:bg-white">
			@foreach ($pagination->items as $post)
					<div class="col-span-1 bg-white dark:bg-not-black">
						@include('_components.post-preview-inline')
					</div>
			@endforeach
			@if( $pagination->pages->count() % 2 == 1)
				<div class="col-span-1 bg-white dark:bg-not-black hidden lg:block">
					<span class="sr-only">There is an odd number of posts.</span>
				</div>
			@endif
		</div>

    @if ($pagination->pages->count() > 1)
        <nav class="flex text-base my-8">
            @if ($previous = $pagination->previous)
                <a
                    href="{{ $previous }}"
                    title="Previous Page"
                    class="bg-gray-200 hover:bg-gray-400 rounded mr-3 px-5 py-3"
                >&LeftArrow;</a>
            @endif

            @foreach ($pagination->pages as $pageNumber => $path)
                <a
                    href="{{ $path }}"
                    title="Go to Page {{ $pageNumber }}"
                    class="bg-gray-200 hover:bg-gray-400 rounded mr-3 px-5 py-3 {{ $pagination->currentPage == $pageNumber ? 'text-blue-600' : 'text-blue-700' }}"
                >{{ $pageNumber }}</a>
            @endforeach

            @if ($next = $pagination->next)
                <a
                    href="{{ $next }}"
                    title="Next Page"
                    class="bg-gray-200 hover:bg-gray-400 rounded mr-3 px-5 py-3"
                >&RightArrow;</a>
            @endif
        </nav>
    @endif
		
@stop

@push('scripts')
<script>
  document.addEventListener('DOMContentLoaded', () => {
    Alpine.store('visitor').from = 'blog'
    Alpine.store('visitor').cta = null
  }, { once: true })
</script>
@endpush
