---
title: About
description: A little bit about the site
---
@extends('_layouts.main')


@section('header')
	@include('_layouts.header-alt', [
		'h1' => 'Web Development & Consulting <br class="hidden lg:inline" /> in St. Louis, MO',
		'h2' => 'About Frendo',
		'desc' => 'Frendo is your foundry for state-of-the-art web design and coding. If you are searching for a dedicated expert to cut right to heart of what matters, look no further.',
	])

@endsection

@section('body')


	<ul>
		<li>Explain the process</li>
		<li>highlight moral and ethical appeal</li>
		<li>highlight choice of technology</li>
		<li>highlight approach/vibe i.e. anti agency, anti bloat</li>
	</ul>
		<ul>
			<li>based in stl mo</li>
			<li>Founded by James Courtois. 15 years of industry experience, design + branding + development + marketing integrations</li>
			<li>philosophy is based on using the right mix leveraging modern technology and keeping a strong moral compass to create truly useful tools that feel trustworthy</li>
			<li>anti agency, anti waste, anti red tape</li>
			<li>process -> free hour of consultation. create a written plan and estimate. complete discovery and revise estimate. complete work. complete training and launch.</li>
		</ul>
@endsection
