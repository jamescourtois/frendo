---
title: Contact Card
description: Let's keep in touch
---
@extends('_layouts.main')

@section('body')
	<div x-data="{clicked:false}" x-init="$store.visitor.playIntro = true" class="flex flex-col items-center justify-center text-center px-4 mb-12">
			<x-header>
				<x-slot name="h1">
					Contact Card
				</x-slot>
				<x-slot name="h2">
					Let's keep in touch.
				</x-slot>
			</x-header>		

			<a href="{{ $page->baseUrl . '/frendo.vcf' }}"
				download="frendo.vcf"
				type="text/vcard"
				target="_self"
				@click="clicked = true"
				x-text="clicked ? 'Frendo.vcf Saved!' : 'Download Contact Card'"
				class="min-w-[260px] mt-4 mb-2 text-xl px-5 py-3 btn-special text-white rounded-full font-bold cursor-pointer">
		</a>
		<span x-text="clicked ? 'Check your downloads folder and open the contact card.' : 'Save the Frendo.vcf contact card to your device.'" class="text-xs text-gray-500"></span>
			
		<ul class="list-none text-3xl font-bold pp-8">
			<li><a href="tel:+16362672552">(636) 267-2552</a></li>
			<li><a href="mailto:james@frendo.dev">james@frendo.dev</a></li>
		</ul>

		<ul class="list-none">
			<li class="kicker mb-3">Get Acquainted</li>
			<li class="mb-2"><a href="/services">Check out Frendo's services</a></li>
			<li class="mb-2"><a href="/about">Get to know Frendo</a></li>
			<li class="mb-2"><a href="/blog">Learn more about the web</a></li>
		</ul>
	</div>
@endsection