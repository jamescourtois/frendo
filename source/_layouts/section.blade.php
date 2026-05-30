<div class="mx-auto group" id="{{ $id }}">
	<h3 class="kicker">{{ $section_kicker }}</h3>
	<h4 class="text-5xl m-0 font-bold group-hover:text-blue-700 dark:group-hover:text-white duration-150">{{ $section_title }}</h4>
	<div>
		@yield('section_content')
		<a href="/contact" class="btn-flashy group-hover:border-blue-600 group-hover:text-blue-600 dark:group-hover:border-white dark:group-hover:text-white">{{ $section_cta}}</a>
	</div>
</div>