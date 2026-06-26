---
title: Websites Services
description: Build with Frendo.
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
			 Your website is the launch pad for everything else. Everything you post and share should lead back to you. Build the site people trust the most. Be a destination, not a traveler.
		</x-slot>
	</x-header>

	<x-prompt question="When it comes to your website, which sounds most like you?">
		<x-prompt-option id="ongoing">"I started a new site, but I'm stuck."</x-prompt-option>
		<x-prompt-option id="support">"My website is having issues."</x-prompt-option>
		<x-prompt-option id="updates">"I need to add stuff to my website."</x-prompt-option>
		<x-prompt-option id="redesign">"My mom said my website is ugly."</x-prompt-option>
		<x-prompt-option id="new">"I am starting from scratch."</x-prompt-option>
	</x-prompt>

<x-content-blocks-wrapper>

		<x-content-block id="ongoing">
			<x-slot name="kicker_text">
				Ongoing Projects
			</x-slot>
			<x-slot name="title_text">
				Get back on track.
			</x-slot>
			<x-slot name="content">
				<Sorry>Getting stuck doesn't have to mean starting over. Maybe your developer ghosted you, or the site builder you are using got too complicated. Your progress is not lost. Let Frendo assess where things are and get the project across the finish line. Sorry things didn't work out how you planned, Frendo can take it from here.</p>
			</x-slot>
			<x-slot name="button_text">
				Get it launched
			</x-slot>
		</x-content-block>

		<x-content-block id="support">
			<x-slot name="kicker_text">
				Website Support
			</x-slot>
			<x-slot name="title_text">
				Get the answers you need.
			</x-slot>
			<x-slot name="content">
				<p>Owning a website can feel like a full time job you did not sign up for. Something breaks and suddenly you find yourself googling "who is JSON" at 11 p.m. To be perfectly honest, some websites can be a dumpster fire. If you feel the heat, call Frendo for backup.</p>
			</x-slot>
			<x-slot name="button_text">
				Fix it for good
			</x-slot>
		</x-content-block>

		<x-content-block id="updates">
			<x-slot name="kicker_text">
				Updates & New Features
			</x-slot>
			<x-slot name="title_text">
				Teach your website new tricks.
			</x-slot>
			<x-slot name="content">
				<p>One great thing about websites is they can grow with you. Frendo understands the tech that powers your website and the best way to update and expand on how your site is built. You don't have to struggle with the back end or build a whole new site. Let's nail down what's possible with your current system.</p>
			</x-slot>
			<x-slot name="button_text">
				Make the right changes
			</x-slot>
		</x-content-block>

		<x-content-block id="redesign">
			<x-slot name="kicker_text">
				Redesign / Rebuild
			</x-slot>
			<x-slot name="title_text">
				Apply what you've learned.
			</x-slot>
			<x-slot name="content">
				<p>Your first website taught you a lot. Now you know your audience better and your brand is sharper. Rebuilding your site allows you to evolve and launch a with fresh perspective. Frendo makes sure your next site reflects all the growth you've already accomplished.</p>
			</x-slot>
			<x-slot name="button_text">
				Build the next version
			</x-slot>
		</x-content-block>

		<x-content-block id="new">
			<x-slot name="kicker_text">
				New Websites
			</x-slot>
			<x-slot name="title_text">
				It's all blue skies from here.
			</x-slot>
			<x-slot name="content">
				<p>Starting from scratch is actually the best place to be. No legacy code or bloated database laying around, just all open runway. Build with Frendo and launch a site that grows with you. Don't rent from a platform that holds your code and data hostage. Own your home online.</p>
			</x-slot>
			<x-slot name="button_text">
				Build for the future
			</x-slot>
		</x-content-block>

		
	
</x-content-blocks-wrapper>
@endsection
@section('cta')
	@include('_layouts.cta',[
		'title' => 'What do you wish everyone knew about you?',
		'link_text' => 'Tell Frendo',
	])
@endsection

@push('scripts')
<script>
  window.addEventListener('scroll', () => {
    Alpine.store('visitor').from = 'websites'
    Alpine.store('visitor').interest = 'websites'
    Alpine.store('visitor').cta = null
  }, { once: true })
</script>
@endpush