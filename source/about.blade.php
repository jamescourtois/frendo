---
title: About
description: A little bit about the site
---
@extends('_layouts.main')


@section('header')
	@include('_layouts.header', [
		'h1' => 'Web Development & Consulting <br class="hidden lg:inline" /> based in St. Louis, MO',
		'h2' => 'The web is for everyone.',
		'desc' => 'Frendo supports people who make things and wants other people to be able to find them. Break away from the tangle of algorithms, ads, bots and extra fees. Build your online safe space.',
	])

@endsection

@section('body')
<div class="mx-auto max-w-[800px] flex flex-col">
	<div class="flex flex-col">
		<div class="text-center">
			<h2 class="uppercase mb-6 text-xs tracking-widest m-0">Why work with Frendo?</h2>
		</div>
		<div class="">
			<h3 class="text-4xl">Create a digital home you actually own.</h3>
			<p class="mt-0 mb-4"><span class="font-bold">Do you truly own your website?</span> If you pay a subscription for an all-in-one service, the answer is likely no. You are renting the code, data and content like a fancy loft apartment. When you want to move your site to a new home, you will have to start over. As your needs evolve and prices change, this can lead to big headaches down the road. When you build with Frendo, you maintain full ownership of your code, content and data. Move anytime and take it all with you.</p>
		</div>
		<div class="">
			<h3 class="text-4xl">Put your money where your code is.</h3>
			<p class="mt-0 mb-4">Working with Frendo means your investment goes directly into the quality of your project. Never pay for layers of managers, emails, meetings, and agency bloat. Frendo is one person at its core, and that's by design. You get a dedicated expert who knows and owns your project from start to finish. Let's find the most efficient path to exactly what you you need.</p>
		</div>
	</div>
	
	<div class="flex flex-col">
		<div class="text-center">
			<h2 class="uppercase mb-6 text-xs tracking-widest m-0">Who is Frendo?</h2>
		</div>
		<div class="w-full flex items-start justify-center">
			<div class="flex flex-col lg:flex-row items-center justify-center gap-8 bg-gray-100  py-4 px-8">
				<div class="overflow-hidden rounded-full size-[120px] border border-not-black">
					<img class="w-[115%] max-w-[115%] block h-auto" src="{{ vite('source/assets/img/founder.png') }}" alt="James Courtois, founder of Frendo Web Development + Consulting based in St. Louis, MO">
				</div>
				<div>
					<h3 class="text-4xl m-0">James Courtois</h3>
					<ul class="list-none m-0">
						<li class="font-bold">Founder &plus; Web Developer</li>
						<li class="">15+ years of industry experience</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="mt-8">
			<p class="mt-0 mb-4">James is a St. Louis native and the founder of Frendo Web Development. Over the last 15 years, James has delivered countless real-world design solutions and shipped dozens of enterpise-level web projects for agencies and corporations.</p>
			<p>Frendo represents the idea that the internet is a power meant to be used for good. Frendo believes that you can connect with the people outside of the monetized algorithm-driven platforms if you build a place for them to find you. Frendo strives to make this an option for everyone no matter where they are at in their digital journey.</p>
		</div>
	</div>
</div>
@endsection
