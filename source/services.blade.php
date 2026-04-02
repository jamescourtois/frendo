---
title: Services
description: What it is we say we do here
---
@extends('_layouts.main')

@section('body')
    <div class="flex flex-col items-center justify-center text-center mb-2 lg:mb-4">
			<h1 class="uppercase text-xs m-0 font-normal tracking-widest">Services Overview</h1>
			<h2 class="mt-3 leading-[2.8rem] text-5xl dark:text-white text-emerald-950">Elevate your online presence.</h2>
			<p class="m-0 flex-1 mb-6">
				Check out each core service below. Whether you need a new website or a simple bug fix, you are in the right place. If you don't find what you need below, fret not. Frendo has the remedy to your web-related woes, all you have to do is <a href="/contact" class="text-lime-700 hover:text-lime-900 dark:text-lime-300 dark:hover:text-lime-600">reach out</a>.
			</p>
		</div>
@endsection
@section('body-full')
		<ul class="list-none grid md:grid-cols-4 lg:grid-cols-5 gap-2 text-gray-900 dark:text-gray-200 px-2">
			<li class="flex flex-col justify-start items-start md:col-span-2 lg:col-span-3 bg-green-200 dark:bg-green-900 p-10">
				<h2 class="mt-0 mb-2 dark:text-white text-emerald-950">Websites</h2>
				<p class="mt-0 mb-4">Your website is your digital flagship. Users demand original content, modern design and lightspeed performance. Are you sharing the right message and the best experience?</p>
				<a href="/services/websites" class="mt-auto btn-special-2 px-4 py-2 rounded-full">View All Website Services</a>
			</li>
			<li class="flex flex-col justify-start items-start md:col-span-2 lg:col-span-2 bg-teal-200 dark:bg-teal-900 p-10">
				<h2 class="mt-0 mb-2 dark:text-white text-emerald-950">E-Commerce</h2>
				<p class="mt-0 mb-4">It's easier than ever to sell directly to your raving fans. Are you ready to discover the best e-commerce stack?</p>
				<a href="/services/ecommerce" class="mt-auto btn-special-2 px-4 py-2 rounded-full">View All E-Commerce Services</a>
			</li>
			<li class="flex flex-col justify-start items-start md:col-span-2 lg:col-span-2 bg-emerald-200 dark:bg-emerald-900 p-10">
				<h2 class="mt-0 mb-2 dark:text-white text-emerald-950">Custom Web Apps</h2>
				<p class="mt-0 mb-4">When you boldly go where none have gone before, you need custom web apps that power productivity and create visibility.</p>
				<a href="/services/custom-web-apps" class="mt-auto btn-special-2 px-4 py-2 rounded-full">View All Custom Web App Services</a>
			</li>
			<li class="flex flex-col justify-start items-start md:col-span-2 lg:col-span-3  bg-cyan-200 dark:bg-cyan-900 p-10">
				<h2 class="mt-0 mb-2 dark:text-white text-emerald-950">Digital Consulting</h2>
				<p class="mt-0 mb-4">Crafting the right technical strategy is mission critical. A solid digital foundation is the launch pad for everything else. Are you leveraging the best web technologies?</p>
				<a href="/services/digital-consulting" class="mt-auto btn-special-2 px-4 py-2 rounded-full">View All Digital Consulting Services</a>
			</li>
		</ul>
		<div class="flex flex-col container mx-auto py-10 px-4">
			<div class="flex-1">
				<h3 class="dark:text-white text-emerald-950 text-4xl">Build a digital home base you actually own.</h3>
				<p class="mt-0 mb-4"><span class="font-bold">Do you truly own your website?</span> There are more ways than ever to build a website. If you pay a subscription for an all-in-one service, you are essentially renting
					your website. When you want to move to a new platform, you typically lose your data and start over from zero. This can lead to big headaches down the road when your web needs evolve.</p>
				<p class="mt-0 mb-8">Build with Frendo and maintain full ownership of your code, content and data. When maintenance gets too heavy, <a class="text-lime-700 hover:text-lime-900 dark:text-lime-300 dark:hover:text-lime-600" href="/contact">Frendo is here</a> to do all the lifting for you. </p>
			</div>

			<div class="flex-1">
				<h3 class="dark:text-white text-emerald-950 text-4xl">Put your money where your code is.</h3>
				<p class="mt-0 mb-4">Working with Frendo means your investment goes directly into crafting your project. You never pay for layers of
					account managers, emails, status meetings, or agency bloat. Your money translates into valuable, productive work.
					By leveraging modern open source stacks like Laravel, Ruby on Rails, and WordPress, Frendo builds high performance sites that are cost
					efficient.</p>
			</div>
		</div>

		<div class="w-full bg-green-200 dark:bg-green-800 flex px-4 text-center items-center justify-center flex-col text-white py-24">
			<h2 class="text-[4rem] lg:text-[6rem] leading-[4.5rem] lg:leading-[6.5rem] text-emerald-950 dark:text-white">Let's surpass your {{ date('Y') }} web goals together.</h2>
			<a href="/contact" class="min-w-[260px] mt-10 text-4xl btn-special-2 px-8 py-4 rounded-full">Contact Frendo</a>
		</div>
@endsection