<div x-in-view id="prompt" class="flex group flex-col px-4 py-8 lg:p-10 border-2 duration-150 text-center bg-white dark:bg-not-black hover:bg-green-500 dark:hover:bg-black border-not-black dark:border-not-white mx-auto max-w-[1050px] relative after:-mb-1 after:-ml-1 after:mt-1 after:mr-1 after:absolute after:inset-0 after:-z-10 after:bg-not-black dark:after:bg-not-white hover:after:-mb-4 hover:after:-ml-4 after:duration-150 hover:after:mt-4 hover:after:mr-4">
	<h2 class="text-center group-hover:text-black group-hover:dark:text-green-500 group-[&.in-view]:dark:text-green-500 duration-150 mb-8 mx-auto font-semibold max-w-[850px] text-3xl lg:text-5xl">{!! $question !!}</h2>
	<ul class="list-none m-0 flex flex-col lg:flex-row flex-wrap items-center justify-center gap-8 relative z-1">
		@foreach($answers as $a)
			<li class="flex lg:min-w-[48%] gap-4 items-center justify-center relative">
				<button
					@click="() => {
							const el = document.querySelector('#{{ $a['id'] }}')
							if (!el) return
							const top = el.getBoundingClientRect().top + window.scrollY - 100
							window.scrollTo({ top, behavior: 'smooth' })
					}"
					class="block font-semibold whitespace-nowrap group-hover:bg-yellow-300 dark:group-hover:bg-black group-hover:text-emerald-950 dark:group-hover:text-white cursor-pointer border-2 border-not-black dark:border-not-white w-full px-4 py-2 relative bg-white dark:bg-black after:-mb-1 after:-ml-1 after:mt-1 after:mr-1 after:absolute after:inset-0 after:bg-not-black dark:after:bg-not-white hover:after:bg-black dark:hover:after:bg-white hover:text-black dark:hover:text-white hover:border-black dark:hover:border-white after:-z-10 hover:after:-mb-4 hover:after:-ml-4 after:duration-150 hover:after:mt-4 hover:after:mr-4 hover:font-extrabold text-lg lg:text-xl duration-150"
					aria-label="Select 'I want the easiest experience.'">
					{!! $a['text'] !!}
				</button>
			</li>
		@endforeach
	</ul>
</div>