<div class="col-span-1 bg-white dark:bg-not-black">
	<div class="flex flex-col items-scretch justify-end h-full">
			<div class="pt-4 px-4 lg:px-8 lg:pt-8">
				<h2 class="text-3xl lg:text-4xl leading-tighter mb-4">
						<a
								href="{{ $post->getUrl() }}"
								title="Read more - {{ $post->title }}"
								class="font-extrabold"
						>{{ $post->title }}</a>
				</h2>
				
						<div class="my-2">
							@if ($post->categories)
											@foreach ($post->categories as $i => $category)
													<a
															href="{{ '/blog/categories/' . $category }}"
															title="View posts in {{ $category }}"
															class="inline-block leading-loose tracking-wide text-current border border-current uppercase text-xs font-normal rounded-lg mr-4 px-3 pt-px"
													>{{ $category }}</a>
											@endforeach
									@endif
						</div>
				<p class="m-0">{!! $post->description !!}</p>
			</div>

			<a
					href="{{ $post->getUrl() }}"
					title="Read more - {{ $post->title }}"
					class="mt-auto block font-semibold tracking-wide p-4 lg:px-8 lg:pb-8"
			>Read the Full Article</a>
	</div>
</div>