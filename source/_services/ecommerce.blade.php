---
title: E-Commerce
description: Sell with Frendo.
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

	<x-prompt question="When it comes to selling online, which sounds most like you?">
		<x-prompt-option id="custom">"I want a store I fully control."</x-prompt-option>
		<x-prompt-option id="managed">"I want the easiest way to sell online."</x-prompt-option>
		<x-prompt-option id="compliance">"My store needs to be legally compliant."</x-prompt-option>
		<x-prompt-option id="cheap">"I want the lowest startup cost."</x-prompt-option>
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
				<p>Adapt your store to your needs, not the other way around. Make no compromises with a storefront tailored for your product that integrates with the tools you already use. Frendo builds modern online stores on the best platform for you. Maximize the experience and minimize selling fees.</p>
			</x-slot>
			<x-slot name="button_text">
				Build your custom storefront
			</x-slot>
		</x-content-block>

		<x-content-block id="managed">
			<x-slot name="kicker_text">
				Managed E-commerce
			</x-slot>
			<x-slot name="title_text">
				Great power without great responsibility.
			</x-slot>
			<x-slot name="content">
				<p>Shopify handles the infrastructure so you can focus on sales. Frendo sets everything up, makes it look like you, loads your products, and makes sure you actually know how to manage your online store. If you get stuck on something, you know a web expert ready to help.</p>
			</x-slot>
			<x-slot name="button_text">
				Get started with Shopify
			</x-slot>
		</x-content-block>

			<x-content-block id="compliance">
			<x-slot name="kicker_text">
				Compliance
			</x-slot>
			<x-slot name="title_text">
				Make it work for everyone.
			</x-slot>
			<x-slot name="content">
				<p>Selling online comes with legal responsibilities most people don't think about until something goes wrong. ADA accessibility, tax collection, GDPR, and consumer privacy laws can all sneak up on you. Frendo makes sure your store is covered before it becomes a problem.</p>
			</x-slot>
			<x-slot name="button_text">
				Make sure you're covered
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
				<p>Every dollar you don't spend is a dollar you earn. A good product doesn't need a fancy custom theme or flashy scroll animations. Frendo sets you up with open source tools on affordable hosting with no subscription fees and no per-transaction cuts. Start small, own everything, and build it up as you go.</p>
			</x-slot>
			<x-slot name="button_text">
				Spin up your new storefront
			</x-slot>
		</x-content-block>
	
</x-content-blocks-wrapper>
@endsection
@section('cta')
	@include('_layouts.cta',[
		'title' => 'Own your online store, not vice versa.',
		'link_text' => 'Sell with Frendo',
	])
@endsection

@push('scripts')
<script>
  window.addEventListener('scroll', () => {
    Alpine.store('visitor').from = 'ecommerce'
    Alpine.store('visitor').interest = 'ecommerce'
		Alpine.store('visitor').cta = null
  }, { once: true })
</script>
@endpush