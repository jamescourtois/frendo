---
title: Websites Services
description: Services for website stuff
---
@extends('_layouts.main')

@section('body')
	<div class="flex flex-col items-center justify-center text-center mb-2 lg:mt-4 xl:mt-6">
		<h1 class="uppercase text-xs m-0 font-normal tracking-widest">Website Services</h1>
		<h2 class="mt-3 leading-[2.8rem] text-5xl text-emerald-950 dark:text-white">The foundation of your online reputation.</h2>
		<p class="m-0 flex-1 mx-auto max-w-[800px]">Your website is more than a few pages and a contact form. It is your source of truth. It invites the world to your doorstep. When users stop by and say hello, serve them the right message with the best experience.</p> 
		<p class="mt-4 mb-0">Which of these best describes your needs?</p>
	</div>
	<ul class="list-none m-0 flex items-center justify-center gap-8">
		<li class="bg-green-100 dark:bg-transparent flex flex-col gap-4 items-center justify-center py-8">
			<button 
				@click="document.querySelector('#new').scrollIntoView({ behavior: 'smooth' })"
				class="btn-green text-xl lg:text-2xl font-bold  rounded-full px-4 py-2 ">
				"I want a whole new website."
			</button>
		</li>
		<li class="bg-green-100 dark:bg-transparent flex flex-col gap-4 items-center justify-center py-8">
			<button 
				@click="document.querySelector('#existing').scrollIntoView({ behavior: 'smooth' })"
				class="btn-green text-xl lg:text-2xl font-bold  rounded-full px-4 py-2 ">
				"I need support for my website."
			</button>
		</li>
	</ul>
	<div class="m-0 flex flex-col">
		<div class="light:bg-gray-100 w-full">
			<div class="xl:pt-18 pb-12 container mx-auto" id="new">
				<h3 class="uppercase text-xs m-0 font-normal tracking-widest">New Websites</h3>
				<h4 class="mt-0 text-5xl font-bold lg:text-[5rem]">Build for the future.</h4>
				<div class="max-w-[800px]">
					<p>When you build with Frendo, you get an enterprise-level tech stack designed to scale. Content, features, and longevity are engineered into the core of your project from the start.</p>
					<p class="font-bold">Services include:</p>
					<ul class="pl-4">
						<li>Enterprise-Level Tech Stacks - Leverage the power of Laravel, WordPress, or Ruby on Rails to build a site that fast and flexible.</li>
						<li>Total Sovereignty - The code, the data, and the content belong to you. No proprietary "rental" locks, ever.</li>
						<li>Tailored Autonomy - Choose your level of involvement. Take the keys and manage it yourself, or let Frendo handle the technical heavy lifting.</li>
						<li>Future-Proof Engineering - A rock-solid foundation means adding new features and content is seamless, ensuring your site exceeds your needs for years to come.</li>
					</ul>
					<p class="pb-6">Your new website starts with a simple conversation. Reach out anytime.</p>
					<a href="/contact" class="mt-auto btn-green px-4 py-2 rounded-full lg:text-2xl lg:px-8 lg:py-4">Let's start your new project</a>
				</div>
			</div>
		</div>
		<div class="light:bg-gray-200 w-full">
			<div class="pt-12 pb-18 container mx-auto" id="existing">
				<h3 class="uppercase text-xs m-0 font-normal tracking-widest">Existing Websites</h3>
				<h4 class="mt-0 text-5xl font-bold lg:text-[5rem]">Evolve, adapt, overcome.</h4>
				<div class="max-w-[800px]">
					<p>Owning a website requires maintenance and problem solving. If you are fighting with your website to keep things running, <a href="/contact">Frendo is in your corner</a>.</p>
					<p class="font-bold">Services include:</p>
					<ul class="pl-4">
						<li>Content updates - Professional updates for your media and content</li>
						<li>Improve performance - Fix bugs, broken pages, loading issues, you name it.</li>
						<li>Add new features - Build user features, integrate third-party services, and more.</li>
						<li>Site Audits - Accessibility, search engine optimization, speed and performance, and more.</li>
					</ul>
					<p class="pb-6">Let's be honest. Legacy websites can be a dumpster fire. When you feel the heat, <a href="/contact" class="text-green-700 hover:text-green-900 dark:text-green-300 dark:hover:text-green-600">call Frendo</a> for backup.</p>
					<a href="/contact" class="mt-auto btn-green px-4 py-2 rounded-full lg:text-2xl lg:px-8 lg:py-4">Get the anwers you need</a>
				</div>
			</div>
		</div>
	</div>
	<div>
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
		<h2 class="max-w-screen block text-[4rem] lg:text-[6rem] leading-[4.5rem] lg:leading-[6.5rem] xl:text-[12rem] xl:leading-[12.5rem] text-green-950 dark:text-white">Take the first step towards acheiving your {{ date('Y') }} web goals.</h2>
		<a href="/contact" class="min-w-[260px] mt-10 text-4xl btn-green px-8 py-4 rounded-full">Contact Frendo Today</a>
	</div>
@endsection
