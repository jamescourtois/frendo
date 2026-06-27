@props (['odd' => false])
<div id="blog-wrapper" class="mx-auto w-full grid grid-cols-1 lg:grid-cols-2 gap-1 py-1 bg-not-black dark:bg-white">
	{!! $slot !!}
	@if( $odd )
		<div class="col-span-1 bg-white dark:bg-not-black hidden lg:flex items-center justify-center">
			<div class="pointer-events-none text-neutral-200 dark:text-neutral-800 text-7xl text-center">Thank you for reading!</div>
		</div>
	@endif
</div>