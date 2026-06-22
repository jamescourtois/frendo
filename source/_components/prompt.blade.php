<div x-in-view id="prompt" class="flex group flex-col w-[96vw] lg:w-full px-4 py-8 lg:p-10 border-2 duration-150 text-center bg-white dark:bg-not-black hover:bg-green-500 [&.in-view]:bg-green-500 dark:[&.in-view]:bg-black dark:hover:bg-black border-not-black dark:border-not-white mx-auto max-w-[1050px] relative mb-8 after:-mb-1 after:-ml-1 after:mt-1 after:mr-1 after:absolute after:inset-0 after:-z-10 after:bg-not-black dark:after:bg-not-white hover:after:-mb-4 hover:after:-ml-4 after:duration-150 hover:after:mt-4 hover:after:mr-4">
	<h2 class="text-center group-hover:text-black group-[&.in-view]:text-black group-hover:dark:text-green-500 group-[&.in-view]:dark:text-green-500 duration-150 mb-8 mx-auto font-semibold max-w-[850px] text-3xl lg:text-5xl">{!! $question !!}</h2>
	<ul class="list-none m-0 flex flex-col lg:flex-row flex-wrap items-center justify-center gap-8 relative z-1">
		{!! $slot !!}
	</ul>
</div>