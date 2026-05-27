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
	<div class="mx-auto" id="rebuild">
		<h2 class="kicker">Rebuilds</h2>
		<h3 class="text-5xl m-0 font-bold ">My website needs a LOT of work.</h3>
		<div>
			<p>desc.</p>
			<a href="/contact" class="mt-auto btn-green px-4 py-2 rounded-full lg:text-2xl lg:px-8 lg:py-4">Button</a>
		</div>
	</div>
	<div class="mx-auto" id="takeover">
		<h2 class="kicker">Takeovers</h2>
		<h3 class="text-5xl m-0 font-bold ">I inherited a website, what do I do with it?.</h3>
		<div>
			<p>desc.</p>
			<a href="/contact" class="mt-auto btn-green px-4 py-2 rounded-full lg:text-2xl lg:px-8 lg:py-4">Button</a>
		</div>
	</div>
	<div class="mx-auto" id="team">
		<h2 class="kicker">Team Building</h2>
		<h3 class="text-5xl m-0 font-bold ">I want to build my own development team.</h3>
		<div>
			<p>desc.</p>
			<a href="/contact" class="mt-auto btn-green px-4 py-2 rounded-full lg:text-2xl lg:px-8 lg:py-4">Button</a>
		</div>
	</div>
	<div class="mx-auto" id="strategy">
		<h2 class="kicker">Strategy</h2>
		<h3 class="text-5xl m-0 font-bold ">I have an idea but how do I build it?</h3>
		<div>
			<p>desc.</p>
			<a href="/contact" class="mt-auto btn-green px-4 py-2 rounded-full lg:text-2xl lg:px-8 lg:py-4">Button</a>
		</div>
	</div>
	<div class="mx-auto" id="train">
		<h2 class="kicker">Training</h2>
		<h3 class="text-5xl m-0 font-bold ">I need to learn more about how my website works.</h3>
		<div>
			<p>desc.</p>
			<a href="/contact" class="mt-auto btn-green px-4 py-2 rounded-full lg:text-2xl lg:px-8 lg:py-4">Button</a>
		</div>
	</div>
	<div class="mx-auto" id="design">
		<h2 class="kicker">Redesign</h2>
		<h3 class="text-5xl m-0 font-bold ">My wife said my website is ugly.</h3>
		<div>
			<p>desc.</p>
			<a href="/contact" class="mt-auto btn-green px-4 py-2 rounded-full lg:text-2xl lg:px-8 lg:py-4">Button</a>
		</div>
	</div>
</div>
@endsection
@section('body-full')
	@include('_layouts.cta',[
		'title' => 'Let&rsquo;s figure it out buttercup.',
		'link_text' => 'Contact Frendo',
	])
@endsection