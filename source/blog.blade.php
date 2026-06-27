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
			When you are armed with the facts, you are empowered to make the best choices. Check out the articles below to learn more about Frendo's approach to the modern web. If you don't see what you are looking for, ask any and all questions <a @click="$store.visitor.cta = 'Fire away.'" href="/contact">here</a>.
		</x-slot>
	</x-header>

    <x-blog-wrapper :odd="$pagination->items->count() % 2 == 1">
			@foreach ($pagination->items as $post)
					
					@include('_components.post-preview-inline')
					
			@endforeach
		</x-blog-wrapper>

    @if ($pagination->pages->count() > 1)
        <nav class="flex items-centert justify-center text-base my-8">
            @if ($previous = $pagination->previous)
                <a
                    href="{{ $previous }}"
                    title="Previous Page"
                    class="border border-current rounded mr-3 px-5 py-3"
                >&LeftArrow;</a>
            @endif

            @foreach ($pagination->pages as $pageNumber => $path)
                <a
                    href="{{ $path }}"
                    title="Go to Page {{ $pageNumber }}"
                    class="border border-current rounded mr-3 px-5 py-3 {{ $pagination->currentPage == $pageNumber ? 'bg-current/40 pointer-events-none' : '' }}"
                >{{ $pageNumber }}</a>
            @endforeach

            @if ($next = $pagination->next)
                <a
                    href="{{ $next }}"
                    title="Next Page"
                    class="border border-current rounded mr-3 px-5 py-3"
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
