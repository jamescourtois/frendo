---
title: Services
description: What it is we say we do here
---
@extends('_layouts.main')

@section('header')

		@include('_layouts.header', [
			'h1' => 'Services Overview',
			'h2' => 'You have a friend in the web business.',
			'desc' => 'Check out each core service below. Whether you need a brand new website or a simple bug fix, you are in the right place. Let Frendo guide you to the best and most efficient answers for all your web needs. You have a real partner you can trust with your online presence. <a href="/contact">Reach out</a> anytime.',
		])

@endsection
@section('body-full')
		@include('_layouts.service-blocks')
		<div class="flex flex-col container mx-auto lg:mt-24 mt-10 px-4">
			<div class="flex-1 mx-auto">
				<h2 class="uppercase mb-6 text-xs tracking-widest m-0">Why work with Frendo?</h2>
			</div>
			<div class="flex-1 max-w-[800px] mx-auto">
				<h3 class="text-4xl">Create a digital home base you actually own.</h3>
				<p class="mt-0 mb-4"><span class="font-bold">Do you truly own your website?</span> If you pay a subscription for an all-in-one service, the answer is likely no. You are essentially renting
					your website, including all of the data and content. When you want to move your site to a new service, you will have to start over from zero. This can lead to big headaches down the road as your web needs evolve.</p>
				<p class="mt-0 mb-0">Build with Frendo and maintain full ownership of your code, content and data. Migrate anytime and take it all with you. If maintenance and overhead get too heavy, <a href="/contact">Frendo is here</a> to do the lifting. </p>
			</div>
		</div>
		<div class="flex flex-col container mx-auto mt-10 mb-24 px-4">
			<div class="flex-1 max-w-[800px] mx-auto">
				<h3 class="text-4xl">Put your money where your code is.</h3>
				<p class="mt-0 mb-4">Working with Frendo means your investment goes directly into crafting your project. You never pay for layers of
					account managers, emails, status meetings, or agency bloat. Your money translates into valuable, productive work.
					By leveraging modern open source stacks like Laravel, Ruby on Rails, and WordPress, Frendo builds high performance sites that are cost
					efficient.</p>
					<p class="mt-0">Invest in your future with Frendo and build a web system that can be expanded in the future to match your growth. <a href="/contact">Frendo is ready</a> to chart your course. </p>
			</div>
		</div>

		<div class="w-full bg-green-200 dark:bg-cyan-950 flex px-4 text-center items-center justify-center flex-col text-white py-24">
			<h2 class="text-[4rem] lg:text-[6rem] xl:text-[12rem] xl:leading-[12.5rem] leading-[4.5rem] lg:leading-[6.5rem] ">Let's crush your {{ date('Y') }} web goals together.</h2>
			<a href="/contact" class="min-w-[260px] mt-10 text-4xl btn-green px-8 py-4 rounded-full">Contact Frendo</a>
		</div>
@endsection