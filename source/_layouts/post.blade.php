@extends('_layouts.main')

@php
    $page->type = 'article';
@endphp

@section('body')
		<div class="container mx-auto">
					<div class="flex w-full text-center flex-col items-center justify-center py-8 lg:py-12">
						<a href="/blog" class="inline-block pl-4 relative">&LeftArrow; Back to All Articles</a>
						<h1 class="leading-none mb-2">{{ $page->title }}</h1>
						<p>{{ $page->description }}</p>
						<ul class="flex gap-1 list-none">
							@if ($page->categories)
							@foreach ($page->categories as $i => $category)
									<li>
										<a
												href="{{ '/blog/categories/' . $category }}"
												title="View posts in {{ $category }}"
												class="inline-block opacity-65 hover:opacity-100 duration-150 leading-loose tracking-wide text-current border border-current uppercase text-xs font-normal rounded-lg mr-4 px-3 pt-px"
										>{{ $category }}</a>
									</li>
							@endforeach
					@endif
						</ul>
					</div>
			
					<div class="mb-10 pb-4 mx-auto max-w-[800px]" v-pre>
							@yield('content')
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
		</div>
@endsection
