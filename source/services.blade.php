---
title: Services
description: What it is we say we do here
---
@extends('_layouts.main')

@section('body')
    <div class="flex flex-col items-center justify-center text-center mb-2 lg:mb-4">
			<h1 class="uppercase text-xs m-0 font-normal tracking-widest">Web Services</h1>
			<h2 class="mt-3 leading-[2.8rem] text-5xl">Elevate your online presence.</h2>
		</div>

		<div class="flex flex-col gap-4 mb-12">
			<ul>
				<li>Solutions customized for your needs.</li>
				<li>Choose between hourly rate or flat rate pricing.</li>
				<li>Large website, small website, quick fixes, audits, etc.</li>
				<li>Process -> free consultation, initial quote, initial discovery, revised quote and findings, complete work, launch and train.</li>
				<li>Size and scope of projects, process outline, use case scenarios</li>
				<li></li>
			</ul>
		</div>

    <ul class="list-none flex flex-wrap justify-stretch align-start gap-4">
			<li class="flex items-start justify-start flex-wrap bg-emerald-100 w-full lg:w-3/5 px-8 py-10 -m-1">
				<h2 class="mt-0 mb-2">Websites</h2>
				<p class="mt-0 mb-8">Your website is your digital flagship. Users demand original content, contemporary design and lightspeed performance. Are you sharing the right message and the best experience?</p>
				<a href="/services/websites" class="self-end btn-special px-4 py-2 text-white rounded-full">View All Website Services</a>
			</li>
			<li class="flex items-start justify-start flex-wrap  bg-cyan-100 w-full lg:w-2/5 px-8 py-10 -m-1">
				<h2 class="mt-0 mb-2">E-Commerce</h2>
				<p class="mt-0 mb-8">It's easier than ever to sell directly to your raving fans. Are you ready to discover the best e-commerce stack?</p>
				<a href="/services/ecommerce" class="self-end btn-special px-4 py-2 text-white rounded-full">View All E-Commerce Services</a>
			</li>
			<li class="flex items-start justify-start flex-wrap bg-indigo-100 w-full lg:w-2/5 px-8 py-10 -m-1">
				<h2 class="mt-0 mb-2">Custom Web Apps</h2>
				<p class="mt-0 mb-8">When you boldly go where none have gone before, you need custom web apps that power productivity and create visibility.</p>
				<a href="/services/custom-web-apps" class="self-end btn-special px-4 py-2 text-white rounded-full">View All Custom Web App Services</a>
			</li>
			<li class="flex items-start justify-start flex-wrap  bg-violet-100 w-full lg:w-3/5 px-8 py-10 -m-1">
				<h2 class="mt-0 mb-2">Digital Consulting</h2>
				<p class="mt-0 mb-8">Crafting the right technical strategy is mission critical. A solid digital foundation is the launch pad for everything else. Are you leveraging the best web technologies?</p>
				<a href="/services/digital-consulting" class="self-end btn-special px-4 py-2 text-white rounded-full">View All Digital Consulting Services</a>
			</li>
		</ul>
@endsection
