---
title: Websites Services
description: Services for website stuff
---
@extends('_layouts.main')

@section('header')
		@include('_layouts.header', [
			'h1' => 'Website Services',
			'h2' => 'Build a home for your online presence.',
			'desc' => 'Your website is your source of truth and your doorstep for the world. When people stop by for a visit, give them a comfortable place to spend time with you.',
		])
@endsection

@section('body')
	@include('_layouts.prompt', [
    'question' => 'Are you starting something new or do you need help with your website?',
    'answers' => [
        ['text' => '"I am starting from scratch."', 'id' => 'new'],
        ['text' => '"I need support for my website."', 'id' => 'existing'],
    ],
	])
@endsection
@section('body-full')
	<div class="m-0 flex flex-col mx-auto max-w-[800px] my-20 lg:my-24 gap-20 lg:gap-24 px-4">
		
			<div class="mx-auto group" id="new">
				<h3 class="kicker">New Websites</h3>
				<h4 class="text-5xl m-0 font-bold group-hover:text-blue-700 dark:group-hover:text-white duration-150">Build for the future.</h4>
				<div>
					<p>When you build your new project with Frendo, we craft a website with a powerful tech stack designed to scale. You get everything you need (even the things you haven't thought of yet) and you won't have to start over with a new website when your subscription price is too high.</p>
					<ul class="pl-4">
						<li>Leverage the power of state-of-the-art tech stacks like Laravel, WordPress, Shopify and Ruby on Rails.</li>
						<li>The code, the data and the content belong to you. Take it with you any time. You are never locked in and you never lose what is yours.</li>
						<li>Choose your level of involvement. Take the keys and manage it yourself, or let Frendo handle the technical heavy lifting.</li>
						<li>Adding new features and content as needed is built-in, ensuring your site meets all your needs over a long lifecycle.</li>
					</ul>
					<p class="">Your new website starts with a simple conversation. Reach out anytime.</p>
					<a href="/contact" class="mt-auto btn-green px-4 py-2 rounded-full lg:text-2xl lg:px-8 lg:py-4">Let's start your new project</a>
				</div>
			</div>
		
			<div class="mx-auto group" id="existing">
				<h3 class="kicker">Existing Websites</h3>
				<h4 class="text-5xl m-0 font-bold group-hover:text-blue-700 dark:group-hover:text-white duration-150">There is always a way.</h4>
				<div>
					<p>Owning a website can feel like a full time job you did not sign up for. When a problem pops up you have to first determine is it the code, the database, the server or the user. Log into the admin, ssh onto the server, clear the cache. Are you feeling a little stressed out already? Let Frendo find the answer for you.</p>
					<ul class="pl-4">
						<li>Professional updates for your media and content</li>
						<li>Fix bugs, broken pages, loading issues, bad links, out of date plugins, you name it.</li>
						<li>Build new features, integrate third-party services, update the look and feel, and more.</li>
						<li>Accessibility audits, performance audits, security audits, QA testing, and more.</li>
					</ul>
					<p class="">Let's be honest; legacy websites can be a dumpster fire. If you feel the heat, call Frendo for backup.</p>
					<a href="/contact" class="mt-auto btn-green px-4 py-2 rounded-full lg:text-2xl lg:px-8 lg:py-4">Get the anwers you need</a>
				</div>
			</div>
		
	</div>
	@include('_layouts.cta',[
		'title' => 'Elevate your web presence.',
		'link_text' => 'Contact Frendo',
	])
@endsection
