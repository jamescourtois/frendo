<div class="flex group flex-col px-4 py-8 lg:p-10 border-2 text-center border-not-black dark:border-not-white mx-auto max-w-[1050px] relative after:-mb-2 after:-ml-2 after:mt-2 after:mr-2 after:absolute after:inset-0 after:border-l-[calc(var(--spacing)*2)] after:border-b-[calc(var(--spacing)*2)] after:border-not-black after:-z-10 dark:after:border-not-white hover:after:-mb-4 hover:after:-ml-4 after:duration-150 hover:after:mt-4 hover:after:mr-4 hover:after:border-l-[calc(var(--spacing)*4)] hover:after:border-b-[calc(var(--spacing)*4)]">
	<h2 class="text-center group-hover:text-green-600 group-hover:dark:text-white duration-150 mb-8 mx-auto font-semibold max-w-[850px] text-3xl lg:text-5xl">{!! $question !!}</h2>
	<ul class="list-none m-0 flex flex-col lg:flex-row flex-wrap items-center justify-center gap-8">
		@foreach($answers as $a)
			<li class="flex lg:min-w-[48%] gap-4 items-center justify-center relative">
				<button
					@click="() => {
							const el = document.querySelector('#{{ $a['id'] }}')
							if (!el) return
							const top = el.getBoundingClientRect().top + window.scrollY - 100
							window.scrollTo({ top, behavior: 'smooth' })
					}"
					class="block whitespace-nowrap cursor-pointer border-2 border-not-black dark:border-not-white w-full px-4 py-2 relative bg-white dark:bg-black after:-mb-2 after:-ml-2 after:mt-2 after:mr-2 after:absolute after:inset-0 after:bg-not-black dark:after:bg-not-white hover:after:bg-black dark:hover:after:bg-white hover:text-black dark:hover:text-white hover:border-black dark:hover:border-white after:-z-10 hover:after:-mb-4 hover:after:-ml-4 after:duration-150 hover:after:mt-4 hover:after:mr-4 hover:font-bold text-lg duration-150"
					aria-label="Select 'I want the easiest experience.'">
					{!! $a['text'] !!}
				</button>
			</li>
		@endforeach
	</ul>
</div>