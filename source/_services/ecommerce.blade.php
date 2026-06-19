---
title: E-Commerce
description: People buy shit online
---
@extends('_layouts.main')

@section('body')

	<x-header>
		<x-slot name="h1">
			E-commerce Services
		</x-slot>
		<x-slot name="h2">
			Keep more of each sale.
		</x-slot>
		<x-slot name="desc">
			The big platforms take big bites out of your revenue. Owning your storefront cuts down the fees. Frendo builds online stores and Shopify themes that don&rsquo;t overwhelm your to-do list or budget.
		</x-slot>
	</x-header>

	<x-prompt question="When it comes to having your own online store, which matters most?">
		<x-prompt-option id="custom">"I need the most control."</x-prompt-option>
		<x-prompt-option id="managed">"I want the easiest experience."</x-prompt-option>
		<x-prompt-option id="cheap">"Three words: lowest cost possible."</x-prompt-option>
	</x-prompt>


<x-content-blocks-wrapper>
	
		<x-content-block id="custom">
			<x-slot name="kicker_text">
				Custom E-commerce
			</x-slot>
			<x-slot name="title_text">
				Your store, your rules.
			</x-slot>
			<x-slot name="content">
				<p>Adapt your e-commerce site to your needs, not the other way around. Make no compromises and build a custom storefront that integrates with the tools you already use. Cut out your subscription costs and your fees boil down to hosting, credit card processing, and shipping. Frendo helps you leverage the best platform tailored to your product, including:</p>
				<ul class="pl-4">
					<li>WordPress + WooCommerce</li>
					<li>BigCommerce</li>
					<li>Bagisto powered by Laravel</li>
				</ul>
			</x-slot>
			<x-slot name="button_text">
				Build a custom storefront
			</x-slot>
		</x-content-block>

		<x-content-block id="managed">
			<x-slot name="kicker_text">
				Managed E-commerce
			</x-slot>
			<x-slot name="title_text">
				Great power without great responsiblity.
			</x-slot>
			<x-slot name="content">
				<p>Shopify handles the infrastructure so you can focus on your products. Frendo sets everything up, makes it look like you, and makes sure you know how to use it.</p>
				<ul class="pl-4">
					<li>Shopify theme development</li>
					<li>Product entry and store set up</li>
					<li>Store administration training & support</li>
					<li>Headless Shopify, if you really want to go crazy</li>
				</ul>
				<p>Your new online store is waiting to be switched on. Frendo is ready when you are.</p>
			</x-slot>
			<x-slot name="button_text">
				Get started with Shopify
			</x-slot>
		</x-content-block>

		<x-content-block id="cheap">
			<x-slot name="kicker_text">
				Maximum Cost Efficiency
			</x-slot>
			<x-slot name="title_text">
				Margins are the name of the game.
			</x-slot>
			<x-slot name="content">
				<p>Every dollar you don't spend is a dollar you earn. Not everyone needs a totally unique design with flashy animations. A good product stands on its own.</p>
				<ul class="pl-4">
					<li>Leverage open-source e-commerce tools with built-in customer flows.</li>
					<li>Get affordable hosting that matches your bandwidth needs.</li>
					<li>Eliminate subscription and per-transaction fees entirely.</li>
					<li>You own everything, take it with you and move to a new platform any time.</li>
					<li>Start small and build on what you have later</li>
				</ul>
				<p>Sometimes you just need the simplest solution. Frendo makes it happen.</p>
			</x-slot>
			<x-slot name="button_text">
				Spin up your new storefront
			</x-slot>
		</x-content-block>
	
</x-content-blocks-wrapper>
@endsection
@section('cta')
	@include('_layouts.cta',[
		'title' => 'Raise your hand if you love paying listing fees.',
		'link_text' => 'Sell with Frendo',
	])
@endsection

@push('scripts')
<script>
  window.addEventListener('scroll', () => {
    Alpine.store('visitor').from = 'ecommerce'
  }, { once: true })
</script>
@endpush