---
title: Custom Web Apps
description: Special sauce
---
@extends('_layouts.main')

@section('body')
	<x-header>
		<x-slot name="h1">
			Custom Web App Services
		</x-slot>
		<x-slot name="h2">
			Build for you.
		</x-slot>
		<x-slot name="desc">
			We have millions of apps but there are still gaps no existing services fill. When you need to span that divide, let Frendo build your bridge.
		</x-slot>
	</x-header>

	<x-prompt question="What can I do with my own custom web app?">
		<x-prompt-option id="community">Build a space for community.</x-prompt-option>
		<x-prompt-option id="productivity">Create tools and automations.</x-prompt-option>
		<x-prompt-option id="integration">Make apps talk to each other.</x-prompt-option>
		<x-prompt-option id="innovation">Turn your idea into a real product.</x-prompt-option>
	</x-prompt>

<x-content-blocks-wrapper>
	
		<x-content-block id="community">
			<x-slot name="kicker_text">
				Community
			</x-slot>
			<x-slot name="title_text">
				Your space, your rules.
			</x-slot>
			<x-slot name="content">
				<p>Whether your community is hyperlocal or hyper-niche, a custom app is a protected place to gather on your terms. No shadowy algorithms, no AI slop, no uninvited guests.</p>
			</x-slot>
			<x-slot name="button_text">
				Lay the foundation
			</x-slot>
		</x-content-block>

		<x-content-block id="productivity">
			<x-slot name="kicker_text">
				Productivity
			</x-slot>
			<x-slot name="title_text">
				Stop doing repetitive work.
			</x-slot>
			<x-slot name="content">
				<p>If you do it the same way every time, a custom app can do it for you. If you are tired of working around the limits of your existing tools, build your own.</p>
			</x-slot>
			<x-slot name="button_text">
				Let's talk metrics
			</x-slot>
		</x-content-block>

		<x-content-block id="integration">
			<x-slot name="kicker_text">
				Integration
			</x-slot>
			<x-slot name="title_text">
				Make apps talk to each other.
			</x-slot>
			<x-slot name="content">
				<p>When two services you depend on don't talk to each other, that gap is your problem. Don't copy/paste between tabs. Let information flow from one source of truth.</p>
			</x-slot>
			<x-slot name="button_text">
				Let's draw up a diagram
			</x-slot>
		</x-content-block>

		<x-content-block id="innovation">
			<x-slot name="kicker_text">
				Innovation
			</x-slot>
			<x-slot name="title_text">
				Every product starts on paper
			</x-slot>
			<x-slot name="content">
				<p>If you have an original idea, the first step is proving it works. Building the simplest version first turns your vision into something real enough to test, share, and build on. From there, anything is possible. You bring the idea and let Frendo handle the infrastructure.</p>
			</x-slot>
			<x-slot name="button_text">
				Share your vision
			</x-slot>
		</x-content-block>
	
</x-content-blocks-wrapper>
@endsection
@section('cta')
	@include('_layouts.cta',[
		'title' => 'Let&rsquo;s bust out the markers and whiteboard.',
		'link_text' => 'Build with Frendo',
	])
@endsection

@push('scripts')
<script>
  window.addEventListener('scroll', () => {
    Alpine.store('visitor').from = 'custom-web-apps'
    Alpine.store('visitor').interest = 'custom-web-apps'
		Alpine.store('visitor').cta = null
  }, { once: true })
</script>
@endpush
