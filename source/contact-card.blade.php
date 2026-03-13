---
title: Contact Card
description: Let's keep in touch
---
@extends('_layouts.main')

@section('body')
	<div class="flex flex-col items-center justify-center">
			<h1>Contact Card</h1>
			<a href="{{ vite('source/_assets/files/frendo.vcf') }}"
				download="frendo.vcf"
				type="text/vcard"
				class="mt-8 px-6 py-3 btn-special text-white rounded-full font-semibold">
				Add to Contacts
		</a>
	</div>

@endsection
