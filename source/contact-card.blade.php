---
title: Contact Card
description: Let's keep in touch
---
@extends('_layouts.main')

@section('body')
	<div x-data="{clicked:false}" x-init="$store.visitor.playIntro = true" class="flex flex-col items-center justify-center text-center mb-12">
			<h1 class="kicker">Contact Card</h1>
			<h2 class="mt-3 leading-[2.8rem] text-5xl mb-5">Let's keep in touch.</h2>
			
			<a href="{{ $page->baseUrl . '/frendo.vcf' }}"
				download="frendo.vcf"
				type="text/vcard"
				target="_self"
				@click="clicked = true"
				x-text="clicked ? 'Frendo.vcf Saved!' : 'Add Frendo as a Contact'"
				class="min-w-[260px] mt-4 mb-2 text-xl px-5 py-3 btn-special text-white rounded-full font-bold cursor-pointer">
		</a>
		<span x-text="clicked ? 'Check your downloads folder and open the contact card.' : 'Save the Frendo.vcf contact card to your device.'" class="text-xs text-gray-500"></span>
			
		<ul class="list-none text-3xl font-bold mt-8 p-8">
			<li><a href="tel:+13146687244">(314) 668-7244</a></li>
			<li><a href="mailto:james@frendo.dev">james@frendo.dev</a></li>
		</ul>

		<ul class="list-none">
			<li class="kicker mb-3">Get Acquainted</li>
			<li class="mb-2"><a href="/services">View a full list of services</a></li>
			<li class="mb-2"><a href="/about">Learn more about Frendo</a></li>
			<li class="mb-2"><a href="/blog">Learn more about the web</a></li>
		</ul>
	</div>
@endsection