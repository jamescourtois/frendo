---
title: E-Commerce
description: People buy shit online
---
@extends('_layouts.main')

@section('body')
	<div class="flex flex-col items-center justify-center text-center mb-2 lg:mb-8">
		<h1 class="uppercase text-xs m-0 font-normal tracking-widest">E-commerce Services</h1>
		<h2 class="mt-3 leading-[2.8rem] text-5xl text-emerald-950 dark:text-white">Sell directly to your raving fans.</h2>
		<p>It's easier than ever to sell online. What is the best platform out there for you? Frendo helps you navigate the modern e-commerce ecosystem and build the best system for your needs.</p> 
	</div>
	<ul class="list-none grid grid-cols-2 gap-2">
		<li class="bg-green-100 dark:bg-gray-900 flex flex-col gap-4 items-center justify-center py-8">
			<span class="uppercase text-xs m-0 font-normal tracking-widest">Custom E-Commerce</span>
			<button 
				@click="document.querySelector('#custom').scrollIntoView({ behavior: 'smooth' })"
				class="btn-green text-xl font-bold  rounded-full px-4 py-2 ">
				"I want full control of my online shop."
			</button>
		</li>
		<li class="bg-green-100 dark:bg-gray-900 flex flex-col gap-4 items-center justify-center py-8">
			<span class="uppercase text-xs m-0 font-normal tracking-widest">Managed E-Commerce</span>
			<button 
				@click="document.querySelector('#managed').scrollIntoView({ behavior: 'smooth' })"
				class="btn-green text-xl font-bold  rounded-full px-4 py-2 ">
				"I want the most hassle-free experience."
			</button>
		</li>
	</ul>
@endsection
@section('body-full')
<div class="m-0 flex flex-col">
	<div class="dark:bg-gray-900 bg-gray-100 w-full">
		<div class="pt-24 pb-12 container mx-auto" id="custom">
			<h3 class="uppercase text-xs m-0 font-normal tracking-widest">Custom E-commerce</h3>
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
	<div class="dark:bg-gray-950 bg-gray-200 w-full">
		<div class="pt-12 pb-18 container mx-auto" id="managed">
			<h3 class="uppercase text-xs m-0 font-normal tracking-widest">Managed E-commerce</h3>
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