---
title: Services
description: What it is we say we do here
---
@extends('_layouts.main')

@section('body')
	<x-header>
		<x-slot name="h1">
			Services Overview
		</x-slot>
		<x-slot name="h2">
			Own your digital home.
		</x-slot>
		<x-slot name="desc">
			The internet did not turn out to be a fad after all. Owning a piece of digital real estate is a valuable thing. Whether you are new to the market or dealing with a real fixer-upper, Frendo is the expert you can trust with all your web needs. Check out the core services below and let's get started.
		</x-slot>
	</x-header>

	@include('_layouts.service-blocks')
	<x-custom-content-wrap>
		<x-slot name="content">
			<h3 class="mb-2">Let's start with the "why."</h3>
			<p class="mt-0">If the first question you get asked is "what's your budget," you are not talking to the right people. Let's take the time to connect and talk about your web goals. Knowledge is free.</p>
			<h3 class="mb-2">We find the best "how" and "how much."</h3>
			<p class="mt-0">Frendo builds enterpise quality websites and apps with open source community-driven tech. That means you are never locked into paying subscriptions or using a platform you can't quit. Invest in a site you own, not a service you rent.</p>		
			<h3 class="mb-2">We start when you say go.</h3>
			<p class="mt-0">When it's time to make a move, you'll know. In the mean time share your story, arm yourself with facts, reflect on your needs. <a href="/contact">Frendo is here</a> when you are ready to visualize the path forward.</p>
		</x-slot>
	</x-custom-content-wrap>
@endsection
@section('cta')
	@include('_layouts.cta',[
		'title' => 'Big ideas start with small talk',
		'link_text' => 'Contact Frendo',
	])
@endsection

@push('scripts')
<script>
  window.addEventListener('scroll', () => {
    Alpine.store('visitor').from = 'services'
  }, { once: true })
</script>
@endpush