@extends('_layouts.main')

@php
    $page->type = 'article';
@endphp

@section('body')
    @if ($page->cover_image)
        <img src="{{ $page->cover_image }}" alt="{{ $page->title }} cover image" class="mb-2">
    @endif
		<a href="/blog" class="inline-block pl-4 relative before:block before:absolute before:translate-x-[-13px] before:translate-y-[7px] before:size-[10px] before:border-l-2 before:border-b-2 before:rotate-45 before:border-current">All Posts</a>
    <h1 class="leading-none mb-2">{{ $page->title }}</h1>
    @if ($page->categories)
        @foreach ($page->categories as $i => $category)
            <a
                href="{{ '/blog/categories/' . $category }}"
                title="View posts in {{ $category }}"
                class="inline-block bg-gray-300 hover:bg-blue-200 leading-loose tracking-wide text-gray-800 uppercase text-xs font-semibold rounded-sm mr-4 px-3 pt-px"
            >{{ $category }}</a>
        @endforeach
    @endif

    <div class="mb-10 pb-4" v-pre>
        @yield('content')
    </div>

		<div class="w-full">
			<p class="text-gray-700 text-xl md:mt-0">Last updated: {{ date('F j, Y', $page->date) }}</p>
		</div>

    <nav class="flex justify-between text-sm md:text-base">
        <div>
            @if ($next = $page->getNext())
                <a href="{{ $next->getUrl() }}" title="Older Post: {{ $next->title }}">
                    &LeftArrow; {{ $next->title }}
                </a>
            @endif
        </div>

        <div>
            @if ($previous = $page->getPrevious())
                <a href="{{ $previous->getUrl() }}" title="Newer Post: {{ $previous->title }}">
                    {{ $previous->title }} &RightArrow;
                </a>
            @endif
        </div>
    </nav>
@endsection
