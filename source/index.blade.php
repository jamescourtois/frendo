@extends('_layouts.main')


@section('header')

		@include('_layouts.header', [
			'h1' => 'Frendo Web Development + Consulting',
			'h2' => 'Your Ethical Digital Partner.',
			'desc' => null,
		])

@endsection
@section('body-full')
		@include('_layouts.service-blocks')
		<div class="flex flex-col container mx-auto lg:mt-24 mt-10 px-4">
			<div class="flex-1 mx-auto">
				<h2 class="uppercase mb-6 text-xs tracking-widest m-0">Yo Waddup?</h2>
			</div>
			<div class="flex-1 max-w-[800px] mx-auto">
				<h3 class="text-4xl">Title.</h3>
				<p class="mt-0 mb-4">Text.</p>
			</div>
		</div>
		<div class="flex flex-col container mx-auto mt-10 mb-24 px-4">
			<div class="flex-1 max-w-[800px] mx-auto">
				<h3 class="text-4xl">Title.</h3>
				<p class="mt-0 mb-4">Text.</p>
			</div>
		</div>

	@include('_layouts.cta',[
		'title' => 'Let&rsquo;s build a better web together.',
		'link_text' => 'Contact Frendo',
	])
@endsection