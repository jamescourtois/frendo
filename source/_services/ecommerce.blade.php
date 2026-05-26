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
        ['text' => '"I want full control."', 'id' => 'custom'],
        ['text' => '"I want the easiest experience."', 'id' => 'managed'],
    ],
	])
@endsection
@section('body-full')
<div class="m-0 flex flex-col">
	<div class="dark:bg-not-black bg-gray-100 w-full">
		<div class="pt-24 pb-12 container mx-auto" id="custom">
			<h3 class="kicker">Custom E-commerce</h3>
			<h4 class="mt-0 text-5xl font-bold lg:text-[5rem]">Transactional trust, built from scratch.</h4>
			<p>Build the best online store that converts visitors into repeat customers. Let Frendo handle the heavy lifting and build a custom storefront that integrates with the tools you already use.</p>
			<p class="font-bold">Services include:</p>
			<ul class="pl-4">
				<li>WordPress + WooCommerce</li>
				<li>Headless Shopify</li>
				<li>Headless BigCommerce</li>
			</ul>
			<p>Your tailor-made digital marketplace is closer than you think. Frendo will guide you there.</p>
			<a href="/contact" class="mt-auto btn-green px-4 py-2 rounded-full">Kick off your new custom storefront</a>
		</div>
	</div>
	<div class="dark:bg-not-black bg-gray-200 w-full">
		<div class="pt-12 pb-18 container mx-auto" id="managed">
			<h3 class="kicker">Managed E-commerce</h3>
			<h4 class="mt-0 text-5xl font-bold lg:text-[5rem]">World class storefront without the overhead.</h4>
			<p>Having your own enterprise-level online store does not have to be complicated. Shopify offers a managed service that still allows the flexibility and customization you need. </p>
			<p class="font-bold">Services include:</p>
			<ul class="pl-4">
				<li>Shopify Liquid theme development</li>
				<li>Product entry and store set up</li>
				<li>Store administration training & support</li>
			</ul>
			<p>Your streamlined always-open online store is just waiting for you to turn it on. Let Frendo get your rubber on the road so you can start cruising.</p>
			<a href="/contact" class="mt-auto btn-green px-4 py-2 rounded-full">Get connected with the best managed service</a>
		</div>
	</div>
</div>
@endsection