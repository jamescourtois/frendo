@props(['desc' => null, 'reverse' => false])
<div class="flex items-center justify-center text-center py-12 lg:py-20 px-6">
	<div x-in-view class="group flex flex-col gap-2">
		

		@if($reverse)
			
			<h1
				@click="() => {
								let el = document.querySelector('#prompt')
								if (!el) el = document.querySelector('#about')
								if (!el) el = document.querySelector('#service-blocks')
								if (!el) el = document.querySelector('#contact-form')
								if (!el) el = document.querySelector('#blog-wrapper')
								if (!el) return
								const top = el.getBoundingClientRect().top + window.scrollY - 100
								window.scrollTo({ top, behavior: 'smooth' })
						}"
				class="order-2 m-0 group-hover:text-red-500 group-hover:font-extrabold group-[&.in-view]:text-red-500 group-[&.in-view]:font-extrabold block text-6xl lg:text-8xl leading-tightest text-center font-bold max-w-[850px] max-w-[1050px] duration-150">
				{!! $h2 ?? $h2!!}
			</h1>
			<h2 class="order-1 kicker m-0 group-hover:font-semibold group-[&.in-view]:font-semibold duration-150 group-hover:text-orange-500 group-[&.in-view]:text-orange-500 group-[&.in-view]:dark:text-white dark:group-hover:text-white">
				{!! $h1 ?? $h1 !!}
			</h2>
		@else
		
			<h1 class="kicker m-0 group-hover:font-semibold group-[&.in-view]:font-semibold duration-150 group-hover:text-orange-500 group-[&.in-view]:text-orange-500 group-[&.in-view]:dark:text-white dark:group-hover:text-white">
				{!! $h1 ?? $h1 !!}
			</h1>
			<h2
				@click="() => {
								let el = document.querySelector('#prompt')
								if (!el) el = document.querySelector('#about')
								if (!el) el = document.querySelector('#service-blocks')
								if (!el) el = document.querySelector('#blog-wrapper')
								if (!el) el = document.querySelector('#contact-form')
								if (!el) return
								const top = el.getBoundingClientRect().top + window.scrollY - 100
								let el2 = document.querySelector('#contact-name')
								if (!el2) return
								el2.focus()
								window.scrollTo({ top, behavior: 'smooth' })
						}"
				class="m-0 group-hover:text-red-500 group-hover:font-extrabold group-[&.in-view]:text-red-500 group-[&.in-view]:font-extrabold block text-6xl lg:text-8xl leading-tightest text-center font-bold max-w-[850px] max-w-[1050px] duration-150">
				{!! $h2 ?? $h2!!}
			</h2>
		@endif

		@if($desc)
		<p class="order-3 mt-4 mb-0 block mx-auto max-w-[900px] group-hover:text-orange-500 dark:group-hover:text-white group-[&.in-view]:text-orange-500 group-[&.in-view]:dark:text-white">
			{!! $desc ?? $desc !!}
		</p>
		@endif
	</div>

</div>