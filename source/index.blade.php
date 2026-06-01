@extends('_layouts.main')


@section('body')
		@include('_layouts.header', [
			'h1' => 'Frendo Web Development + Consulting',
			'h2' => 'It&rsquo;s nice to meet you.',
			'desc' => 'The web is a big place and everyone needs help getting around. You found a web developer who knows the lay of the land. Familiarize yourself with the core services below and let&rsquo;s get started.',
		])
		@include('_layouts.service-blocks')
		<x-custom-content-wrap>
			<x-slot name="content">
				<h3>You are in the right place.</h3>
				<p>Frendo offers <a href="/services">four core services</a> that cover everything you need to own a piece of the internet. Based in St. Louis, MO and founded by a 15 year industry veteran, can trust your project is in the right hands.</p>
				<h3>Own your digital home.</h3>
				<p>In 2026 it can feel like the big platforms own the entire web. Thankfully, this is just not true. In the digital world you can expand into new territory and stake your claim. <a href="/about">Frendo has the experience</a> and tools to make sure you thrive online.</p>
				<h3>Start with what you have.</h3>
				<p>You don't need to have your budget nailed down or an official design brief written up. The first step is always a conversation. Share your story, arm yourself with the facts, reflect on your needs. When it's time to make a move, you'll know. <a href="/contact">Reach out to Frendo</a> when you're ready.</p>
			</x-slot>
		</x-custom-content-wrap>
	@include('_layouts.cta',[
		'title' => 'Let&rsquo;s build a better web together.',
		'link_text' => 'Contact Frendo',
	])
@endsection