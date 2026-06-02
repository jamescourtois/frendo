<div class="mx-auto group hover:text-blue-900 duration-250 hover:bg-sky-100 p-8 md:p-20" id="{{ $id }}">
	<h3 class="kicker group-hover:font-bold group-hover:text-blue-900 duration-250">{{ $kicker_text }}</h3>
	<h4 class="text-5xl m-0 font-bold group-hover:font-extrabold group-hover:text-blue-800 dark:group-hover:text-white duration-250">{{ $title_text }}</h4>
	<div>		
		{!! $content !!}
		<a href="/contact" class="btn-flashy group-hover:border-rose-600 group-hover:text-rose-600 dark:group-hover:border-white dark:group-hover:text-white mb-0">{{ $button_text }}</a>
	</div>
</div>