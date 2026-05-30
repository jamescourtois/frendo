@extends('_layouts.main')


@section('header')

		@include('_layouts.header', [
			'h1' => 'Frendo Web Development + Consulting',
			'h2' => 'It&rsquo;s nice to meet you.',
			'desc' => 'Welcome to Frendo. The web is a big place and everyone needs help getting around. You have found a web developer who knows the lay of the land.',
		])

@endsection
@section('body-full')
		@include('_layouts.service-blocks')
		<div class="flex flex-col container mx-auto lg:my-24 my-12 px-4 lg:px-0">
			<div class="flex-1 max-w-[800px] mx-auto">
				<h3>You are in the right place.</h3>
				<p>Frendo offers <a href="/services">four core services</a> that cover everything you need to own a piece of the internet. Based in St. Louis, MO and founded by a 15 year industry veteran, <a href="/about">you have a friend</a> in the web business you can trust.</p>
				<h3>Own your digital home.</h3>
				<p>In 2026 it can feel like the big platforms own the entire web. Thankfully, this is just not true. In the digital world you can expand into new territory and stake your own claim. Frendo has the experience and tools to make sure you thrive online.</p>
				<h3>Start with what you have.</h3>
				<p>You don't need to have your budget nailed down or an official design brief written up. The first step is always conversation. Share your story, arm yourself with the facts, reflect on your needs. When it's time to make a move, you'll know it. <a href="/contact">Reach out to Frendo</a> for help.</p>
			</div>
		</div>
	@include('_layouts.cta',[
		'title' => 'Let&rsquo;s build a better web together.',
		'link_text' => 'Contact Frendo',
	])
@endsection