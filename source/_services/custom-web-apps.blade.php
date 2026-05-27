---
title: Custom Web Apps
description: Special sauce
---
@extends('_layouts.main')

@section('header')
	@include('_layouts.header', [
		'h1' => 'Custom Web App Services',
		'h2' => 'Original thinking requires custom logic.',
		'desc' => 'Millions of apps exist, but there are still gaps that no existing service can fill. When you need to span that divide, Frendo is here to build your bridge.',
	])
@endsection
@section('body')
	@include('_layouts.prompt', [
    'question' => 'What can I do with my own custom web app?',
    'answers' => [
			['text' => 'Build a space for community.', 'id' => 'community'],
			['text' => 'Create your own tools.', 'id' => 'productivity'],
			['text' => 'Stop doing repetitive work.', 'id' => 'automation'],
			['text' => 'Make apps talk to each other.', 'id' => 'integration'],
			['text' => 'Turn your idea into a real product.', 'id' => 'innovation'],
    ],
	])
@endsection
@section('body-full')
<div class="m-0 flex flex-col mx-auto max-w-[800px] my-20 lg:my-24 gap-20 lg:gap-24 px-4">
	<div class="mx-auto" id="community">
		<h2 class="kicker">Community</h2>
		<h3 class="text-5xl m-0 font-bold ">Build a space for community.</h3>
		<div>
			<p>desc.</p>
			<a href="/contact" class="mt-auto btn-green px-4 py-2 rounded-full lg:text-2xl lg:px-8 lg:py-4">Button</a>
		</div>
	</div>
	<div class="mx-auto" id="productivity">
		<h2 class="kicker">productivity</h2>
		<h3 class="text-5xl m-0 font-bold ">Create your own tools.</h3>
		<div>
			<p>desc.</p>
			<a href="/contact" class="mt-auto btn-green px-4 py-2 rounded-full lg:text-2xl lg:px-8 lg:py-4">Button</a>
		</div>
	</div>
	<div class="mx-auto" id="automation">
		<h2 class="kicker">Automation</h2>
		<h3 class="text-5xl m-0 font-bold ">Stop doing repetitive work.</h3>
		<div>
			<p>desc.</p>
			<a href="/contact" class="mt-auto btn-green px-4 py-2 rounded-full lg:text-2xl lg:px-8 lg:py-4">Button</a>
		</div>
	</div>
	<div class="mx-auto" id="integration">
		<h2 class="kicker">Integration</h2>
		<h3 class="text-5xl m-0 font-bold ">Make apps talk to each other.</h3>
		<div>
			<p>desc.</p>
			<a href="/contact" class="mt-auto btn-green px-4 py-2 rounded-full lg:text-2xl lg:px-8 lg:py-4">Button</a>
		</div>
	</div>
	<div class="mx-auto" id="innovation">
		<h2 class="kicker">Innovation</h2>
		<h3 class="text-5xl m-0 font-bold ">Turn your idea into a real product.</h3>
		<div>
			<p>desc.</p>
			<a href="/contact" class="mt-auto btn-green px-4 py-2 rounded-full lg:text-2xl lg:px-8 lg:py-4">Button</a>
		</div>
	</div>
</div>
	@include('_layouts.cta',[
		'title' => 'Let&rsquo;s build wepapply what you want.',
		'link_text' => 'Contact Frendo',
	])
@endsection
