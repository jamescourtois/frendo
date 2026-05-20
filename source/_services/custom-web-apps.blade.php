---
title: Custom Web Apps
description: Special sauce
---
@extends('_layouts.main')

@section('body')

	@include('_layouts.header', [
		'h1' => 'Custom Web App Services',
		'h2' => 'Customized logic for original thinkers.',
		'desc' => 'Millions of apps exist, but there are still gaps that no existing service can fill. When you need to span that divide, Frendo is here to build your bridge.',
	])

	<p class="font-bold">Services include:</p>
	<ul class="pl-4">
		<li>Laravel / PHP custom apps</li>
		<li>Ruby on Rails custom apps</li>
		<li>WordPress custom apps</li>
	</ul>

	<p class="font-bold">Advantages:</p>
	<ul class="pl-4">
		<li>CI/CD for ongoing innovation</li>
		<li>Build as PWA, Install on phone like app</li>
		<li>Let users log in and be autonomous</li>
		<li>Make two apps talk to each other that don't do that already</li>
	</ul>
@endsection