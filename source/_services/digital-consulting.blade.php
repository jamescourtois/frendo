---
title: Digital Consulting
description: Ax me summin
---
@extends('_layouts.main')

@section('header')
@include('_layouts.header', [
		'h1' => 'Digital Consulting Services',
		'h2' => 'It&rsquo;s okay to ask for help.',
		'desc' => 'In the web world, it is a rite of passage to encounter a problem that stops you dead in your tracks. The good news is Frendo has already been there.',
	])
@endsection

@section('body')
	@include('_layouts.prompt', [
    'question' => 'Which of these sounds the most like you?',
    'answers' => [
		['text' => '"My website needs a LOT of work."', 'id' => 'rebuild'],
		['text' => '"I inherited a website, what do I do with it?"', 'id' => 'takeover'],
		['text' => '"I want to build my own development team."', 'id' => 'team'],
		['text' => '"I have an idea but how do I build it?"', 'id' => 'strategy'],
		['text' => '"I need to learn how my website works."', 'id' => 'train'],
		['text' => '"My mom said my website is ugly."', 'id' => 'design'],
    ],
	])
	<div class="m-0 flex flex-col mx-auto max-w-[800px] my-20 lg:my-24 gap-20 lg:gap-24 px-4">
	<div class="mx-auto group" id="rebuild">
		<h2 class="kicker">Rebuilds</h2>
		<h3 class="text-5xl m-0 font-bold group-hover:text-blue-600 dark:group-hover:text-white">Get a fresh start.</h3>
		<div>
			<p>At a certain point, patching things up costs more than starting fresh. Frendo handles the full transition from your old site to the new, making sure nothing is lost in the process.</p>
			<a href="/contact" class="mt-auto btn-green group-hover:border-blue-600 group-hover:text-blue-600 px-4 py-2 rounded-full lg:text-2xl lg:px-8 lg:py-4">Start planning</a>
		</div>
	</div>
	<div class="mx-auto group" id="takeover">
		<h2 class="kicker">Takeovers</h2>
		<h3 class="text-5xl m-0 font-bold group-hover:text-blue-600 dark:group-hover:text-white">The answer is always "it depends."</h3>
		<div>
			<p>There are many ways to build websites, and some are better than others. Frendo understands the technology that powers your new site and what it is capable of.</p>
			<a href="/contact" class="mt-auto btn-green group-hover:border-blue-600 group-hover:text-blue-600 px-4 py-2 rounded-full lg:text-2xl lg:px-8 lg:py-4">Let's look under the hood</a>
		</div>
	</div>
	<div class="mx-auto group" id="team">
		<h2 class="kicker">Team Building</h2>
		<h3 class="text-5xl m-0 font-bold group-hover:text-blue-600 dark:group-hover:text-white">Build the right team the right way.</h3>
		<div>
			<p>Managing developers is a skill set of its own. If you are ready to bring development in-house but are not sure how to structure it, Frendo helps you design the team, define the roles, and put the workflows in place before the first person is hired. So when your team shows up, they have something to work within</p>
			<a href="/contact" class="mt-auto btn-green group-hover:border-blue-600 group-hover:text-blue-600 px-4 py-2 rounded-full lg:text-2xl lg:px-8 lg:py-4">Design your new team</a>
		</div>
	</div>
	<div class="mx-auto group" id="strategy">
		<h2 class="kicker">Strategy</h2>
		<h3 class="text-5xl m-0 font-bold group-hover:text-blue-600 dark:group-hover:text-white">Clarity without commitment.</h3>
		<div>
			<p>Knowing is half the battle. Making the investment in your new idea will require the right technology to carry you through years of growth. Frendo gets you there the smartest way possible.</p>
			<a href="/contact" class="mt-auto btn-green group-hover:border-blue-600 group-hover:text-blue-600 px-4 py-2 rounded-full lg:text-2xl lg:px-8 lg:py-4">Share your vision</a>
		</div>
	</div>
	<div class="mx-auto group" id="train">
		<h2 class="kicker">Training</h2>
		<h3 class="text-5xl m-0 font-bold group-hover:text-blue-600 dark:group-hover:text-white">Be the master of your domain.</h3>
		<div>
			<p>Understanding how your website works puts you in control. Frendo walks you through everything at your pace with no judgment, no rushing, and all the answers you need.</p>
			<a href="/contact" class="mt-auto btn-green group-hover:border-blue-600 group-hover:text-blue-600 px-4 py-2 rounded-full lg:text-2xl lg:px-8 lg:py-4">Book a session</a>
		</div>
	</div>
	<div class="mx-auto group" id="design">
		<h2 class="kicker">Redesign</h2>
		<h3 class="text-5xl m-0 font-bold group-hover:text-blue-600 dark:group-hover:text-white">Your mom is just trying to help.</h3>
		<div>
			<p>First impressions matter. Frendo refreshes the design and layout without touching what is under the hood. It's your site but with a better first impression. Mom will be proud.</p>
			<a href="/contact" class="mt-auto btn-green group-hover:border-blue-600 group-hover:text-blue-600 px-4 py-2 rounded-full lg:text-2xl lg:px-8 lg:py-4">Start your redesign</a>
		</div>
	</div>
</div>
@endsection
@section('body-full')
	@include('_layouts.cta',[
		'title' => 'You don&rsquo;t have to say "asking for a friend."',
		'link_text' => 'Consult Frendo',
	])
@endsection