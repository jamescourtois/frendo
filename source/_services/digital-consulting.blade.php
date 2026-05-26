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
		['text' => '"I have an idea but how do I build it?"', 'id' => 'build'],
		['text' => '"I need to learn more about how my website works."', 'id' => 'ugly'],
		['text' => '"My mom said my website is ugly."', 'id' => 'ugly'],
    ],
	])
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
@section('body-full')
	@include('_layouts.cta',[
		'title' => 'Let&rsquo;s figure it out buttercup.',
		'link_text' => 'Contact Frendo',
	])
@endsection