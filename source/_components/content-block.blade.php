<div x-in-view class="w-full mx-auto group hover:text-blue-900 dark:hover:text-gray-100 duration-250 hover:bg-cyan-200 dark:hover:bg-neutral-900 dark:[&.in-view]:bg-neutral-900 px-8 py-12 md:p-20" id="{{ $id }}">
	<h3 class="kicker group-hover:font-bold group-hover:text-blue-700 group-[&.in-view]:text-blue-700 dark:group-hover:text-white duration-250">{{ $kicker_text }}</h3>
	<h4 class="text-4xl lg:text-5xl leading-tighter mt-0 mb-4 font-bold group-hover:font-extrabold group-hover:text-blue-700 group-[&.in-view]:text-blue-700 dark:group-hover:text-blue-500 duration-250">{{ $title_text }}</h4>
	<div>		
		{!! $content !!}
		<a href="/contact" @click="$store.visitor.from = $store.visitor.from + '-{{ $id }}'" class="btn-flashy group-hover:border-blue-700 group-hover:text-blue-700 group-[&.in-view]:text-blue-700 group-[&.in-view]:border-blue-700 dark:group-hover:border-blue-500 dark:group-hover:text-blue-500 mb-0">{{ $button_text }}</a>
	</div>
</div>