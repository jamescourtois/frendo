---
title: Websites Services
description: Services for website stuff
---
@extends('_layouts.main')

@section('body')
	<div class="flex flex-col items-center justify-center text-center mb-2 lg:mb-8">
		<h1 class="uppercase text-xs m-0 font-normal tracking-widest">Website Services</h1>
		<h2 class="mt-3 leading-[2.8rem] text-5xl text-emerald-950 dark:text-white">The foundation of your online reputation.</h2>
		<p>Your website is more than a few pages and a contact form. It is your source of truth. It invites the world to your doorstep. When users stop by and say hello, it is critical to serve the right message with the best experience. First impressions matter.</p> 
	</div>
	<ul class="list-none grid grid-cols-2 gap-2">
		<li class="bg-green-100 dark:bg-gray-900 flex flex-col gap-4 items-center justify-center py-8">
			<span class="uppercase text-xs m-0 font-normal tracking-widest">New Websites</span>
			<button class="btn-green text-xl font-bold  rounded-full px-4 py-2 ">"I want a whole new system."</button>
			
		</li>
		<li class="bg-green-100 dark:bg-gray-900 flex flex-col gap-4 items-center justify-center py-8">
			<span class="uppercase text-xs m-0 font-normal tracking-widest">Existing Websites</span>
			<button class="btn-green text-xl font-bold  rounded-full px-4 py-2 ">"I need support for my existing website."</button>
			
		</li>
	</ul>
@endsection

@section('body-full')
<div class="m-0 flex flex-col">
	<div class="bg-gray-900 w-full">
		<div class="pt-24 pb-12 container mx-auto" id="new">
			<h3>New Websites</h3>
			<h4>Build for the future.</h4>
			<p>When you build with Frendo, you get an enterprise-level tech stack designed to scale. Content, features, and longevity are engineered into the core of your project from the start.</p>
			<ul>
				<li>Enterprise-Level Tech Stacks - Leverage the power of Laravel, WordPress, or Ruby on Rails to build a site that fast and flexible.</li>
				<li>Total Sovereignty - The code, the data, and the content belong to you. No proprietary "rental" locks, ever.</li>
				<li>Tailored Autonomy - Choose your level of involvement. Take the keys and manage it yourself, or let Frendo handle the technical heavy lifting.</li>
				<li>Future-Proof Engineering - A rock-solid foundation means adding new features and content is seamless, ensuring your site exceeds your needs for years to come.</li>
			</ul>
			<p>Your new website starts with a simple conversation. Reach out anytime.</p>
			<a href="/contact" class="mt-auto btn-green px-4 py-2 rounded-full">Contact Frendo</a>
		
		</div>
	</div>
	<div class="bg-gray-950 w-full">
		<div class="pt-12 pb-18 container mx-auto" id="existing">
			<h3>Existing Websites</h3>
			<h4>Evolve, Adapt, Overcome.</h4>
			<p>Owning a website requires maintenance and problem solving. If you are fighting with your website to keep things running, <a href="/contact">Frendo is in your corner</a>.</p>
			<ul>
				<li>Content updates - Professional updates for your media and content</li>
				<li>Improve performance - Fix bugs, broken pages, loading issues, you name it.</li>
				<li>Teach an old dog new tricks - Build user features, integrate third-party services, and more.</li>
				<li>Site Audits - Accessibility, search engine optimization, speed and performance, and more.</li>
			</ul>
			<p>Legacy websites can be a dumpster fire. When you feel the heat, call Frendo for backup.</p>
			<a href="/contact" class="mt-auto btn-green px-4 py-2 rounded-full">Contact Frendo</a>
		</div>
	</div>
</div>
<div class="w-full bg-emerald-500 dark:bg-emerald-950 flex text-center items-center justify-center flex-col text-white py-24">
	<h2 class="max-w-screen block text-[4rem] lg:text-[6rem] leading-[4.5rem] lg:leading-[6.5rem] text-green-950 dark:text-white">Take the first step towards acheiving your {{ date('Y') }} web goals.</h2>
	<a href="/contact" class="min-w-[260px] mt-10 text-4xl btn-green px-8 py-4 rounded-full">Contact Frendo Today</a>
</div>
@endsection