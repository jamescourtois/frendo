---
title: Services
description: What it is we say we do here
---
@extends('_layouts.main')

@section('header')

		@include('_layouts.header', [
			'h1' => 'Services Overview',
			'h2' => 'You have a friend in the web business.',
			'desc' => 'We can all agree that the internet did not turn out to be a fad. Having your own space in the digital world is a valuable thing. Whether you are starting a new project, making something better, or just trying to put out fires, you are in the right place.',
		])

@endsection
@section('body-full')
		@include('_layouts.service-blocks')
		<div class="text-center mx-auto pt-20 lg:pt-24">
			<h2 class="kicker">What to Expect</h2>
		</div>
		<div class="mx-auto max-w-[800px] flex flex-col pb-20 gap-6 lg:pb-24">
			<div>
				<h3 class="mb-2">Knowledge is free.</h3>
				<p class="mt-0">If the first question you get asked is "what's your budget," you are not talking to the right person. When you share your passion and it is met with pricepoints and pre-made templates, find a better way. The first step is a conversation that costs nothing.</p>
			</div>
			<div>
				<h3 class="mb-2">Get the real answers.</h3>
				<p class="mt-0">There are many ways to build websites and apps. The trick is not to paint yourself into a corner or get locked into paying a subscription you can't quit. Frendo presents you with all your options and no strings attached.</p>
			</div>
			<div>
				<h3 class="mb-2">We start when you say go.</h3>
				<p class="mt-0">When it's time to make a move, you'll know. In the mean time, arm yourself with the facts. Reflect on what you need to change. Visualize the results you want to see. Frendo will be here when you are ready to start.</p>
			</div>
		</div>
		@include('_layouts.cta',[
			'title' => 'Frendo is your ethical digital partner.',
			'link_text' => 'Contact Frendo',
		])
@endsection