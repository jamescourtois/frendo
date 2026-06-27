---
title: Vunderbar
description: Thank you for reaching out!
---
@extends('_layouts.main')

@section('body')
    <div class="text-center flex flex-col items-center justify-start min-h-[60dvh] px-4 py-8">
			<h1>High Five!</h1>
			<p class="max-w-[400px]">Your message has been received. Thank you for reaching out! Responses typically take one to two business days. </p>
			<ul class="list-none my-11">
				<li class="kicker mb-3">Stay a while</li>
				<li class="mb-2"><a href="/blog">Learn more about the web</a></li>
				<li class="mb-2"><a href="/about">Get to know Frendo</a></li>
				<li class="mb-2"><a href="/services">Check out Frendo's services</a></li>
			</ul>
		</div>
@endsection
