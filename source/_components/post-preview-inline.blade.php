<div class="flex flex-col mb-4 p-4 lg:p-8 xl:p-16">
    <h2 class="text-3xl lg:text-4xl mt-0">
        <a
            href="{{ $post->getUrl() }}"
            title="Read more - {{ $post->title }}"
            class="font-extrabold"
        >{{ $post->title }}</a>
    </h2>

		<div>
			@if ($post->categories)
							@foreach ($post->categories as $i => $category)
									<a
											href="{{ '/blog/categories/' . $category }}"
											title="View posts in {{ $category }}"
											class="inline-block bg-gray-300 hover:bg-blue-200 leading-loose tracking-wide text-gray-800 uppercase text-xs font-semibold rounded-sm mr-4 px-3 pt-px"
									>{{ $category }}</a>
							@endforeach
					@endif
		</div>

    <p class="mb-4 mt-0">{!! $post->description !!}</p>

    <a
        href="{{ $post->getUrl() }}"
        title="Read more - {{ $post->title }}"
        class="uppercase font-semibold tracking-wide mb-2"
    >Read</a>
</div>
