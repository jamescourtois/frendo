<li class="flex lg:min-w-[48%] gap-4 items-center justify-center relative">
	<button
		@click="() => {
				const el = document.querySelector('#{{ $id }}')
				if (!el) return
				const top = el.getBoundingClientRect().top + window.scrollY - 100
				window.scrollTo({ top, behavior: 'smooth' })
		}"
		class="block font-semibold whitespace-nowrap group-hover:bg-yellow-300 group-[&.in-view]:bg-yellow-300 dark:group-[&.in-view]:bg-black dark:group-hover:bg-black group-hover:text-emerald-950 dark:group-hover:text-white cursor-pointer border-2 border-not-black dark:border-not-white w-full px-4 py-2 relative bg-white dark:bg-black after:-mb-1 after:-ml-1 after:mt-1 after:mr-1 after:absolute after:inset-0 after:bg-not-black dark:after:bg-not-white hover:after:bg-black dark:hover:after:bg-white hover:text-black dark:hover:text-white hover:border-black dark:hover:border-white after:-z-10 hover:after:-mb-4 hover:after:-ml-4 after:duration-150 hover:after:mt-4 hover:after:mr-4 hover:font-extrabold text-lg lg:text-xl duration-150"
		aria-label="Prompt Select">
		{!! $slot !!}
	</button>
</li>