---
title: Contact Card
description: Let's keep in touch
---
@extends('_layouts.main')

@section('body')
	<div class="flex flex-col items-center justify-center text-center">
			<h1 class="uppercase text-xs m-0 font-normal tracking-widest">Contact Frendo</h1>
			<h2 class="mt-3 leading-[2.8rem] text-5xl mb-5">Let's keep in touch.</h2>
			
			
			<a href="{{ $page->baseUrl . '/frendo.vcf' }}"
				download="frendo.vcf"
				type="text/vcard"
				target="_blank"
				class="mt-4 mb-2 text-xl px-5 py-3 btn-special text-white rounded-full font-bold">
				Add Frendo as a Contact
		</a>
		<span class="text-xs text-gray-500">(Save Frendo.vcf contact card to your device)</span>
			
		<ul class="list-none  text-xl font-bold mt-8">
			<li>(314) 249-4760</li>
			<li>james@frendo.dev</li>
		</ul>
			
	</div>

@endsection
