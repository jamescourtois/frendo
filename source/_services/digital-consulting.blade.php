---
title: Digital Consulting
description: Ax me summin
---
@extends('_layouts.main')

@section('header')
@include('_layouts.header', [
		'h1' => 'Digital Consulting Services',
		'h2' => 'Bring new horizons into view.',
		'desc' => 'Doing what has never been done before requires research, foresight and planning. Frendo is your magic 8 ball. Let&rsquo;s shake things up and work together on the answers you seek.',
	])
@endsection

@section('body')
	@include('_layouts.prompt', [
    'question' => 'Which of these sounds the most like you?',
    'answers' => [
		['text' => '"I need to overhaul my website and it needs a lot of work"', 'id' => 'rebuild'],
		['text' => '"I inherited a website and I dont know what to do with it."', 'id' => 'takeover'],
		['text' => '"I want to build my own development team."', 'id' => 'team'],
		['text' => '"I know what I want, I just need someone to build it"', 'id' => 'build'],
		['text' => '"My mom said my website is ugly."', 'id' => 'ugly'],
    ],
	])
	<p class="font-bold">Services include:</p>
	<ul class="pl-4">
		<li>Site audits - Accessibility, SEO, GEO, performance, design</li>
		<li>Web training - Learn how admin your site, upload content, edit photos, and more.</li>
		<li>Project planning and management - Agile or waterfall, asana or jira or azure</li>
		<li>Learn to code - HTML, CSS, Ruby, PHP, and more.</li>
	</ul>
	<ul>
		<li>Maybe your website is too old, maybe your website is broken, maybe it's not accessible, what do you need to do to fix it?</li>
		<li>maybe you have an existing site and you want to know the current health status. how long until it needs to be rebuilt, how accessible is it</li>
		<li>Should you invest in a custom site, or should you use a subscription service? Should you use WordPress or Wix or Squarespace? What about geting a custom emeail domain set up? These are questions we answer together.</li>
		<li>What people do you need to put in place in order to run an online store, or a lead generation site, etc. </li>
	</ul>
@endsection