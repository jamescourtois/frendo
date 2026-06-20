---
title: Websites Services
description: Services for website stuff
---
@extends('_layouts.main')

@section('body')
	<x-header>
		<x-slot name="h1">
			Website Services
		</x-slot>
		<x-slot name="h2">
			Be the source.
		</x-slot>
		<x-slot name="desc">
			Your website is a doorstep for the world with a light that's always on. Make it a place people visit first and trust the most. Be a destination, not a traveler.
		</x-slot>
	</x-header>

	<x-prompt question="Are you building something new or do you need help with a problem?">
		<x-prompt-option id="new">"I am starting from scratch."</x-prompt-option>
		<x-prompt-option id="redesign">"I want to redesign my site."</x-prompt-option>
			<x-prompt-option id="support">"My website needs work."</x-prompt-option>
			<x-prompt-option id="ongoing">"I started a new site, but I'm stuck."</x-prompt-option>
	</x-prompt>

<x-content-blocks-wrapper>
	
		<x-content-block id="new">
			<x-slot name="kicker_text">
				New Websites
			</x-slot>
			<x-slot name="title_text">
				Build for the future.
			</x-slot>
			<x-slot name="content">
				<p>When you build your new project with Frendo, we craft a website with a powerful tech stack designed to scale. You get everything you need (even the things you haven't thought of yet) and you won't have to start over with a new website when your subscription price is too high.</p>
				<ul class="pl-4">
					<li>Leverage the power of state-of-the-art tech stacks like Laravel, WordPress, Shopify and Ruby on Rails.</li>
					<li>The code, the data and the content belong to you. Take it with you any time. You are never locked in and you never lose what is yours.</li>
					<li>Choose your level of involvement. Take the keys and manage it yourself, or let Frendo handle the technical heavy lifting.</li>
					<li>Adding new features and content as needed is built-in, ensuring your site meets all your needs over a long lifecycle.</li>
				</ul>
				<p class="">Your new website starts with a simple conversation. Reach out anytime.</p>
			</x-slot>
			<x-slot name="button_text">
				Let's start planning
			</x-slot>
		</x-content-block>

		<x-content-block id="redesign">
			<x-slot name="kicker_text">
				Redesign
			</x-slot>
			<x-slot name="title_text">
				Apply what you've already learned.
			</x-slot>
			<x-slot name="content">
				<p>Every time you make a recipe it gets better. Every time you rebuild your website, leverage your experience and make it even better.</p>
				<ul class="pl-4">
					<li>bullets.</li>
				</ul>
				<p class="">Closer.</p>
			</x-slot>
			<x-slot name="button_text">
				CTA
			</x-slot>
		</x-content-block>

		<x-content-block id="support">
			<x-slot name="kicker_text">
				Website Support
			</x-slot>
			<x-slot name="title_text">
				There is always a way.
			</x-slot>
			<x-slot name="content">
				<p>Owning a website can feel like a full time job you did not sign up for. Let's say a problem pops up. Is it the code, the database, or the server? Log into the admin, ssh onto the server, clear the cache. Are you feeling stressed out already? Let Frendo take it from here.</p>
				<ul class="pl-4">
					<li>Professional updates for your media and content</li>
					<li>Fix bugs, broken pages, loading issues, bad links, out of date plugins, you name it.</li>
					<li>Build new features, integrate third-party services, update the look and feel, and more.</li>
					<li>Accessibility audits, performance audits, security audits, and quality assurance.</li>
				</ul>
				<p class="">Let's be honest; legacy websites can be a dumpster fire. If you feel the heat, call Frendo for backup.</p>
			</x-slot>
			<x-slot name="button_text">
				Get the anwers you need
			</x-slot>
		</x-content-block>

		<x-content-block id="ongoing">
			<x-slot name="kicker_text">
				Ongoing Projects
			</x-slot>
			<x-slot name="title_text">
				Let's get it launched.
			</x-slot>
			<x-slot name="content">
				<p>Building a new web project is like building anything else. Things can go wrong and derail your progress.</p>
				<ul class="pl-4">
					<li>Assess where you are.</li>
					<li>Determine feasible goals.</li>
					<li>Preserve existing work.</li>
					<li>Pivot when needed.</li>
					<li>Get the project across the finish line.</li>
				</ul>
				<p class="">Sorry things didn't work out with your last dev. Frendo can take it from here.</p>
			</x-slot>
			<x-slot name="button_text">
				Get back on track
			</x-slot>
		</x-content-block>

		
	
</x-content-blocks-wrapper>
@endsection
@section('cta')
	@include('_layouts.cta',[
		'title' => 'What do you wish your website could do?',
		'link_text' => 'Tell Frendo',
	])
@endsection

@push('scripts')
<script>
  window.addEventListener('scroll', () => {
    Alpine.store('visitor').from = 'websites'
    Alpine.store('visitor').interest = 'websites'
  }, { once: true })
</script>
@endpush