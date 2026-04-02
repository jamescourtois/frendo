---
title: Websites Services
description: Services for website stuff
---
@extends('_layouts.main')

@section('body')
	<div class="flex flex-col items-center justify-center text-center mb-2 lg:mb-8">
		<h1 class="uppercase text-xs m-0 font-normal tracking-widest">Website Services</h1>
		<h2 class="mt-3 leading-[2.8rem] text-5xl">The foundation of your online reputation.</h2>
		<p>Your website is more than an online business card. It is your source of truth. It is where the world comes to your digital doorstep. When users stop by and say hello, it is critical to serve the right message with the best experience. First impressions last forever.</p> 
	</div>
	<div class="m-0 flex flex-wrap gap-8">
		<div class="">
			<h3>New Websites</h3>
			<h4>Build your digital foundation for the future.</h4>
			<p>When you build with Frendo, you get an enterprise-level tech stack designed to scale. Content, features, and longevity are engineered into the core of your project from the start.</p>
			<ul>
				<li>Enterprise-Level Tech Stacks - Leverage the power of Laravel, WordPress, or Ruby on Rails to build a site that fast and flexible.</li>
				<li>Total Sovereignty - The code, the data, and the content belong to you. No proprietary "rental" locks, ever.</li>
				<li>Tailored Autonomy - Choose your level of involvement. Take the keys and manage it yourself, or let Frendo handle the technical heavy lifting.</li>
				<li>Future-Proof Engineering - A rock-solid foundation means adding new features and content is seamless, ensuring your site exceeds your needs for years to come.</li>
			</ul>
		</div>
		<div class="">
			<h3>Existing Websites</h3>
			<h4>Evolve, Adapt, Overcome.</h4>
			<p>Owning a website requires maintenance and problem solving. If you feel like you are fighting with your website to keep things running, <a href="/contact">Frendo is in your corner</a>.</p>
			<ul>
				<li>Content updates - Professional updates for your media and content</li>
				<li>Improve performance - Fix bugs, broken pages, loading issues, you name it.</li>
				<li>Teach an old dog new tricks - Build user features, integrate a third-party service, and more.</li>
			</ul>
		</div>
	</div>
@endsection

@section('body-full')
<div class="w-full bg-blue-500 flex text-center items-center justify-center flex-col text-white py-24">
	<h2 class="text-[10rem]">Take the first step towards acheiving your {{ date('Y') }} web goals.</h2>
	<a href="/contact" class="min-w-[260px] mt-4 mb-2 text-xl px-5 py-3 btn-special text-white rounded-full font-bold cursor-pointer">Contact Frendo Today</a>
</div>
@endsection