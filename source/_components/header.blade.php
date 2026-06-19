<div class="flex items-center justify-center text-center py-28 lg:py-20 px-4">
	<div x-in-view class="group flex flex-col gap-2">
		<h1 class="kicker m-0 group-hover:font-semibold duration-150 group-hover:text-orange-500 dark:group-hover:text-white">
			{!! $h1 ?? $h1 !!}
		</h1>
		<h2
			@click="() => {
							let el = document.querySelector('#prompt')
							if (!el) el = document.querySelector('#about')
							if (!el) el = document.querySelector('#service-blocks')
							if (!el) el = document.querySelector('#contact-form')
							if (!el) return
							const top = el.getBoundingClientRect().top + window.scrollY - 100
							window.scrollTo({ top, behavior: 'smooth' })
					}"
			class="m-0 group-hover:text-red-500 group-hover:font-extrabold group-[&.in-view]:text-red-500 group-[&.in-view]:font-extrabold block text-6xl lg:text-8xl leading-tightest text-center font-bold max-w-[850px] max-w-[1050px] duration-150">
			{!! $h2 ?? $h2!!}
		</h2>
		<p class="m-0 block mx-auto max-w-[800px] group-hover:text-orange-500 dark:group-hover:text-white">
			{!! $desc ?? $desc !!}
		</p>
	</div>

</div>