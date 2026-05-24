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
				<h3 class="dark:text-white text-emerald-950 text-4xl">Title.</h3>
				<p class="mt-0 mb-4">Text.</p>
			</div>
		</div>
		<div class="flex flex-col container mx-auto mt-10 mb-24 px-4">
			<div class="flex-1 max-w-[800px] mx-auto">
				<h3 class="dark:text-white text-emerald-950 text-4xl">Title.</h3>
				<p class="mt-0 mb-4">Text.</p>
			</div>
		</div>

		<div class="w-full bg-green-200 dark:bg-yellow-500 flex px-4 text-center items-center justify-center flex-col py-24">
			<h2 class="text-[4rem] lg:text-[6rem] xl:text-[12rem] xl:leading-[12.5rem] leading-[4.5rem] lg:leading-[6.5rem] text-emerald-950 dark:text-not-black">Let's crush your {{ date('Y') }} web goals together.</h2>
			<a href="/contact" class="min-w-[260px] mt-10 text-4xl btn-not-black hidden dark:inline-flex px-8 py-4 rounded-full">Contact Frendo</a>
			<a href="/contact" class="min-w-[260px] mt-10 text-4xl btn-green dark:hidden px-8 py-4 rounded-full">Contact Frendo</a>
		</div>
@endsection