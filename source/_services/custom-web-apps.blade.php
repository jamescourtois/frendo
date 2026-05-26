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
			['text' => 'Build a space for community', 'id' => 'community'],
			['text' => 'Create your own tools', 'id' => 'productiviy'],
			['text' => 'Stop doing repetitive work', 'id' => 'automation'],
			['text' => 'Make apps talk to each other', 'id' => 'integration'],
			['text' => 'Turn your idea into a real product', 'id' => 'innovation'],
    ],
	])
@endsection
@section('body-full')
	@include('_layouts.cta',[
		'title' => 'Let&rsquo;s build wepapply what you want.',
		'link_text' => 'Contact Frendo',
	])
@endsection