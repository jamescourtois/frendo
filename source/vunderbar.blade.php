---
title: Vunderbar
description: Thank you for reaching out!
---
@extends('_layouts.main')

@section('body')
    <div class="text-center flex flex-col items-center justify-start">
			<h1>High Five!</h1>
			<p class="max-w-[400px]">Your message has been received. Thank you for reaching out! You will get a response typically within one business day. </p>
			<ul class="list-none">
				<li class="kicker mb-3">Stay a while</li>
				<li class="mb-2"><a href="/services">View a full list of services</a></li>
				<li class="mb-2"><a href="/about">Learn more about Frendo</a></li>
				<li class="mb-2"><a href="/blog">Check out the blog</a></li>
			</ul>
		</div>
@endsection
