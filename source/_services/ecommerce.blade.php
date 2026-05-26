---
title: E-Commerce
description: People buy shit online
---
@extends('_layouts.main')

@section('header')
@include('_layouts.header', [
			'h1' => 'E-commerce Services',
			'h2' => 'It&rsquo;s your product, keep more of every sale.',
			'desc' => 'The big platforms might be easy to use, but they take big bites out of your revenue. Building your own storefront cuts down the fees, but might not feel feasible. Frendo builds online stores that don&rsquo;t overwhelm your to-do list or budget.',
		])
@endsection

@section('body')
	@include('_layouts.prompt', [
    'question' => 'When it comes to having your own online store, which is more important to you?',
    'answers' => [
        ['text' => '"I need the most control."', 'id' => 'custom'],
        ['text' => '"I want the easiest experience."', 'id' => 'managed'],
        ['text' => '"Making it as cheap as possible is all that matters."', 'id' => 'cheap'],
    ],
	])
@endsection
@section('body-full')
<div class="m-0 flex flex-col mx-auto max-w-[800px] my-20 lg:my-24 gap-20 lg:gap-24 px-4">
	
		<div class="mx-auto" id="custom">
			<h3 class="kicker">Custom E-commerce</h3>
			<h4 class="text-5xl m-0 font-bold  leading-tighter">Your store, your rules.</h4>
			<p>Adapt your e-commerce site to your needs, not the other way around. Make no compromises and build a custom storefront that integrates with the tools you already use. Cut out your subscription costs and your fees boil down to hosting, credit card processing, and shipping. Frendo helps you leverage the best platform tailored to your product, including:</p>
			<ul class="pl-4">
				<li>WordPress + WooCommerce</li>
				<li>BigCommerce</li>
				<li>Bagisto</li>
			</ul>
			<a href="/contact" class="mt-auto btn-green px-4 py-2 rounded-full lg:text-2xl lg:px-8 lg:py-4">Build a custom storefront</a>
		</div>
	
		<div class="mx-auto" id="managed">
			<h3 class="kicker">Managed E-commerce</h3>
			<h4 class="text-5xl m-0 font-bold  leading-tighter">Great power without great responsibility.</h4>
			<p>Shopify handles the infrastructure so you can focus on your products. Frendo sets everything up, makes it look like you, and makes sure you know how to use it.</p>
			<ul class="pl-4">
				<li>Headless Shopify App Development</li>
				<li>Shopify theme development</li>
				<li>Product entry and store set up</li>
				<li>Store administration training & support</li>
			</ul>
			<p>Your new online store is waiting to be switched on. Frendo is ready when you are.</p>
			<a href="/contact" class="mt-auto btn-green px-4 py-2 rounded-full lg:text-2xl lg:px-8 lg:py-4">Get started with Shopify</a>
		</div>

		<div class="mx-auto" id="cheap">
			<h3 class="kicker">Maximum Cost Efficiency</h3>
			<h4 class="text-5xl m-0 font-bold  leading-tighter">Margins are the name of the game.</h4>
			<p>Every dollar you don't spend is a dollar you earn. Not everyone needs a totally unique design with flashy animations. A good product stands on its own.</p>
			<ul class="pl-4">
				<li>Leverage open-source e-commerce tools with built-in customer flows.</li>
				<li>Get affordable hosting that matches your bandwidth needs.</li>
				<li>Eliminate subscription and per-transaction fees entirely.</li>
				<li>You own everything, take it with you and move to a new platform any time.</li>
			</ul>
			<p>Sometimes you just need the simplest solution. Frendo makes it happen.</p>
			<a href="/contact" class="mt-auto btn-green px-4 py-2 rounded-full lg:text-2xl lg:px-8 lg:py-4">Get started with the basics</a>
		</div>
	
</div>

	@include('_layouts.cta',[
		'title' => 'Let&rsquo;s sell shit idk.',
		'link_text' => 'Contact Frendo',
	])
@endsection