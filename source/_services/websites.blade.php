---
title: Websites Services
description: Services for website stuff
---
@extends('_layouts.main')

@section('header')
		@include('_layouts.header', [
			'h1' => 'Website Services',
			'h2' => 'The foundation of your online presence.',
			'desc' => 'Your website is your source of truth and your doorstep for the world. When users stop by for a visit, give them a comfortable place to spend time with you.',
		])
@endsection

@section('body')
	@include('_layouts.prompt', [
    'question' => 'Are you starting something new or do you need help with a problem?',
    'answers' => [
        ['text' => '"I am starting from scratch."', 'id' => 'new'],
        ['text' => '"I need support for my website."', 'id' => 'existing'],
    ],
	])
	<div class="m-0 flex flex-col max-w-[800px] mx-auto">
		<div class="light:bg-gray-100 w-full">
			<div class="xl:pt-18 pb-12 container mx-auto" id="new">
				<h3 class="kicker">New Websites</h3>
				<h4 class="mt-0 text-5xl font-bold lg:text-[4.25rem]">Build for the future.</h4>
				<div class="max-w-[800px]">
					<p>When you build your new project with Frendo, we craft a website with a powerful tech stack designed to scale. You get everything you need (even the things you haven't thought of yet) and you won't have to start over with a new website when your subscription price is too high.</p>
					<ul class="pl-4">
						<li>Leverage the power of state-of-the-art tech stacks like Laravel, WordPress, Shopify and Ruby on Rails.</li>
						<li>The code, the data and the content belong to you. Take it with you any time. You are never locked in and you never lose what is yours.</li>
						<li>Choose your level of involvement. Take the keys and manage it yourself, or let Frendo handle the technical heavy lifting.</li>
						<li>Adding new features and content as needed is built-in, ensuring your site meets all your needs over a long lifecycle.</li>
					</ul>
					<p class="pb-6">Your new website starts with a simple conversation. Reach out anytime.</p>
					<a href="/contact" class="mt-auto btn-green px-4 py-2 rounded-full lg:text-2xl lg:px-8 lg:py-4">Let's start your new project</a>
				</div>
			</div>
		</div>
		<div class="light:bg-gray-200 w-full">
			<div class="pt-12 pb-18 container mx-auto" id="existing">
				<h3 class="kicker">Existing Websites</h3>
				<h4 class="mt-0 text-5xl font-bold lg:text-[4.25rem]">Evolve, adapt, overcome.</h4>
				<div class="max-w-[800px]">
					<p>Owning a website can feel like a full time job you did not sign up for. If you are fighting with your website to keep things running, Frendo is in your corner.</p>
					<p class="font-bold">Services include:</p>
					<ul class="pl-4">
						<li>Professional updates for your media and content</li>
						<li>Fix bugs, broken pages, loading issues, bad links, out of date plugins, you name it.</li>
						<li>Build new features, integrate third-party services, modify the layouts, and more.</li>
						<li>Accessibility audits, performance audits, security audits, QA testing, and more.</li>
					</ul>
					<p class="pb-6">Let's be honest; legacy websites can be a dumpster fire. If you feel the heat, call Frendo for backup.</p>
					<a href="/contact" class="mt-auto btn-green px-4 py-2 rounded-full lg:text-2xl lg:px-8 lg:py-4">Get the anwers you need</a>
				</div>
			</div>
		</div>
		<h2>Recommended blogs</h2>
		<ul>
			<li>All the ways you can build a website in 2026.</li>
			<li>What do you get when you pay a marketing agency for a new website?</li>
			<li>What is the difference between a website and a web app</li>
			<li>How to choose the right website platform for your </li>
		</ul>
	</div>

@endsection
@section('body-full')
	<div class="w-full bg-green-500 dark:bg-green-950 flex text-center items-center justify-center flex-col text-white py-24">
		<h2 class="max-w-screen block text-[4rem] lg:text-[6rem] leading-[4.5rem] lg:leading-[6.5rem] text-green-950 dark:text-white">Let's elevate your web presence together.</h2>
		<a href="/contact" class="min-w-[260px] mt-10 text-4xl btn-green px-8 py-4 rounded-full">Contact Frendo Today</a>
	</div>
@endsection
