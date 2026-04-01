---
title: Services
description: What it is we say we do here
---
@extends('_layouts.main')

@section('body')
    <div class="flex flex-col items-center justify-center text-center mb-2 lg:mb-4">
			<h1 class="uppercase text-xs m-0 font-normal tracking-widest">Services Overview</h1>
			<h2 class="mt-3 leading-[2.8rem] text-5xl">Elevate your online presence.</h2>
		</div>

		<div class="flex flex-col lg:flex-row gap-4 lg:gap-10 mb-10">
			
			<p class="m-0 flex-1">
				<span class="font-bold">Meaningful partnerships</span> begin with a conversation. Let's translate your vision and needs into a digital plan of action. Frendo provides right-sized solutions that outperform one-size-fits-all template sites.
			</p>
			<p class="m-0 flex-1">
				<span class="font-bold">Ownership vs. renting</span> is a critical consideration. Who truly owns your website? Can you package it all up and take it where you choose? If you pay a service every month for your site, the answer is likely no. 
			</p>
			<p class="m-0 flex-1">
				<span class="font-bold">Check out each core service</span> below for more details. It is time to take control of your digital presence and Frendo is in your corner. Whether you need a full website build or a simple bug fix, you are in the right place. <a href="/contact">Reach out</a> anytime.
			</p>
		</div>
		<hr class="border-indigo-100 my-1">
		<h2 class="uppercase text-center text-xs mb-8 block font-normal tracking-widest">Core Services</h2>
    <ul class="list-none flex flex-wrap justify-stretch align-start gap-8">
			<li class="flex items-start justify-start flex-wrap bg-lime-100 w-full lg:w-3/5 px-8 py-10 -m-2">
				<h2 class="mt-0 mb-2">Websites</h2>
				<p class="mt-0 mb-8">Your website is your digital flagship. Users demand original content, contemporary design and lightspeed performance. Are you sharing the right message and the best experience?</p>
				<a href="/services/websites" class="self-end btn-special-2 btn px-4 py-2 text-white rounded-full">View All Website Services</a>
			</li>
			<li class="flex items-start justify-start flex-wrap  bg-green-100 w-full lg:w-2/5 px-8 py-10 -m-2">
				<h2 class="mt-0 mb-2">E-Commerce</h2>
				<p class="mt-0 mb-8">It's easier than ever to sell directly to your raving fans. Are you ready to discover the best e-commerce stack?</p>
				<a href="/services/ecommerce" class="self-end btn-special-2 btn px-4 py-2 text-white rounded-full">View All E-Commerce Services</a>
			</li>
			<li class="flex items-start justify-start flex-wrap bg-emerald-100 w-full lg:w-2/5 px-8 py-10 -m-2">
				<h2 class="mt-0 mb-2">Custom Web Apps</h2>
				<p class="mt-0 mb-8">When you boldly go where none have gone before, you need custom web apps that power productivity and create visibility.</p>
				<a href="/services/custom-web-apps" class="self-end btn-special-2 btn px-4 py-2 text-white rounded-full">View All Custom Web App Services</a>
			</li>
			<li class="flex items-start justify-start flex-wrap  bg-teal-100 w-full lg:w-3/5 px-8 py-10 -m-2">
				<h2 class="mt-0 mb-2">Digital Consulting</h2>
				<p class="mt-0 mb-8">Crafting the right technical strategy is mission critical. A solid digital foundation is the launch pad for everything else. Are you leveraging the best web technologies?</p>
				<a href="/services/digital-consulting" class="self-end btn-special-2 btn px-4 py-2 text-white rounded-full">View All Digital Consulting Services</a>
			</li>
		</ul>
@endsection
