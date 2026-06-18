---
title: Websites Services
description: Services for website stuff
---
@extends('_layouts.main')

@section('body')
	@include('_layouts.header', [
		'h1' => 'Website Services',
		'h2' => 'Be the source of your story.',
		'desc' => 'Your website is a doorstep for the world with a light that is always on. When people stop by for a visit, give them a comfortable place to spend time with you.',
	])

	@include('_layouts.prompt', [
    'question' => 'Are you starting something new or do you need help with what you have?',
    'answers' => [
        ['text' => '"I am starting from scratch."', 'id' => 'new'],
        ['text' => '"Something is wrong with my website."', 'id' => 'existing'],
        ['text' => '"I am started a new site, but I&rsquo;m stuck."', 'id' => 'ongoing'],
    ],
	])

<x-content-blocks-wrapper>
	<x-slot name="blocks">
		<x-content-block>
			<x-slot name="id">
				new
			</x-slot>
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

		<x-content-block>
			<x-slot name="id">
				existing
			</x-slot>
			<x-slot name="kicker_text">
				Existing Websites
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

		<x-content-block>
			<x-slot name="id">
				ongoing
			</x-slot>
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
	</x-slot>		
</x-content-blocks-wrapper>
@endsection
@section('cta')
	@include('_layouts.cta',[
		'title' => 'What do you wish your website could do?',
		'link_text' => 'Tell Frendo',
	])
@endsection
