---
title: About
description: A little bit about the site
---
@extends('_layouts.main')


@section('body')

	<x-header>
		<x-slot name="h1">
			Web Development & Consulting <br class="hidden lg:inline" /> in St. Louis, MO
		</x-slot>
		<x-slot name="h2">
			You have a friend in <br class"hidden lg:inline" />the web business.
		</x-slot>
	</x-header>

<div id="about" class="mx-auto max-w-[800px] flex flex-col gap-12 mb-20 px-4 xl:px-0">
	<div class="flex flex-col">
		<div class="text-center">
			<h2 class="uppercase mb-6 text-xs tracking-widest m-0">Why work with Frendo?</h2>
		</div>
		<div class="">
			<h3 class="text-4xl">Create a digital home you actually own.</h3>
			<p class="mt-0 mb-4"><span class="font-bold">Do you truly own your website?</span> If you pay a subscription for an all-in-one service, the answer is likely no. You are renting the code, data and content like a fancy loft apartment. When it's time to move your site to a new home, that means starting all over. As your needs evolve and prices change, this can lead to big headaches down the road. Building with Frendo means you maintain full ownership of your code, content and data. Move anytime and take it all with you.</p>
		</div>
		<div class="">
			<h3 class="text-4xl">Put your money where your code is.</h3>
			<p class="mt-0 mb-4">Working with Frendo means your investment goes directly into the quality of your project. Never pay for layers of managers, meetings and agency bloat. Frendo is one person, and that's by design. You get a web expert who knows and owns your project from start to finish.</p>
		</div>
	</div>
	
	<div class="flex flex-col">
		<div class="text-center">
			<h2 class="uppercase mb-6 text-xs tracking-widest m-0">Who is Frendo?</h2>
		</div>
		<div class="w-full flex items-start justify-center">
			<div class="flex flex-col lg:flex-row items-center justify-center text-center lg:text-left gap-4 lg:gap-8 bg-gray-100 dark:bg-neutral-800 py-4 px-8 lg:px-16 lg:py-8">
				<div class="overflow-hidden rounded-full size-[120px] lg:size-[150px] border border-not-black">
					<img class="w-[115%] max-w-[115%] block h-auto" src="/assets/img/founder.png" alt="James Courtois, founder of Frendo Web Development" />
				</div>
				<div>
					<h3 class="text-4xl m-0">James Courtois</h3>
					<ul class="list-none m-0">
						<li class="font-bold">Founder / Web Developer</li>
						<li class="">15 years of industry experience</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="mt-8">
			<p class="mt-0 mb-4">James is a St. Louis native and web expert with over 15 years of experience in the creative + web space. He has designed, built, and deployed projects for agencies and corporations of all sizes. With an equal dedication to aesthetic and efficiency, James builds web projects for both humans and machines.</p>
			<p>James started Frendo because the internet is too valuable to surrender to the big platforms. Build your own place for people to find you and they will. Create a path for connecting and you will make connections. That should be available to everyone wherever they are starting from. Let's make the web a place we want to be.</p>
		</div>
	</div>

	<div class="flex flex-col">
		<div class="text-center">
			<h2 class="uppercase mb-6 text-xs tracking-widest m-0">How do I start?</h2>
		</div>
		<div class="">
			<h3 class="text-4xl">A simple conversation is the first step.</h3>
			<p class="mt-0 mb-4">You don't need all the details now. A website is a combination of many things: photography, writing, design, logic. Let's focus on what you have now and where you want to be. Let Frendo show you the path forward. When you are ready, <a href="/contact">let's connect</a>.</p>
		</div>
	</div>
</div>
@include('_layouts.service-blocks')
@endsection
@section('cta')
	@include('_layouts.cta',[
		'title' => 'Connect with a web expert you can trust.',
		'link_text' => 'Contact Frendo',
	])
@endsection

@push('scripts')
<script>
  window.addEventListener('scroll', () => {
    Alpine.store('visitor').from = 'about'
  }, { once: true })
</script>
@endpush