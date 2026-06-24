---
title: Contact
description: Get in touch with us
---
@extends('_layouts.main')

@section('body')

	<x-header>
		<x-slot name="h1">
			Contact Frendo
		</x-slot>
		<x-slot name="h2">
			<span x-show="($store.visitor.from == 'home' || $store.visitor.from == 'about') && !$store.visitor.cta">Don&rsquo;t be a stranger.</span>
			<span x-show="$store.visitor.from != 'home' && $store.visitor.from != 'about' && !$store.visitor.cta">The first step is a simple conversation.</span>
			<span x-show="$store.visitor.cta != null && $store.visitor.cta != ''" x-text="$store.visitor.cta"></span>
		</x-slot>
		
	</x-header>

<div class="flex flex-col lg:flex-row items-start justify-center gap-8 mb-16 max-w-[1024px] mx-auto">
	<div class="w-full lg:w-auto order-2 flex flex-wrap justify-around items-start lg:flex-col lg:gap-8 lg:justify-between">
		<ul class="list-none text-center lg:text-left m-0 text-xl"> 
			<li class="kicker">Call or text</li>
			<li class="mb-2"><a href="tel:+13146687244">(314) 668-7244</a></li>
		</ul>
		<ul class="list-none text-center lg:text-left m-0 text-xl"> 
			<li class="kicker">Send a note</li>
			<li><a href="mailto:james@frendo.dev">james@frendo.dev</a></li>
		</ul>
	</div>
	<div class="w-full lg:w-2/3 lg:border-r border-not-black dark:border-not-white dark:border-not-white px-4 lg:px-0 lg:pr-8">
		<span class="block text-center kicker">Official Contact Form</span>
		<form x-data="{preference:'both'}"  id="contact-form" class="form-style" method="POST" action="https://api.form-data.com/f/xxunkl9ky5eslugaxr3qcb" class="mb-12">
				<div class="flex flex-wrap mb-6 -mx-3">
						<div class="w-full md:w-1/2 mb-6 md:mb-0 px-3">
								<label class="block mb-2 font-semibold" for="contact-name">
										Your preferred name&ast;
								</label>
	
								<input
										type="text"
										id="contact-name"
										placeholder="e.g. Guy Fieri"
										name="name"
										class="border-not-black dark:border-not-white block w-full border mb-2 px-4 py-3"
										required
										autofocus
								>
						</div>
						<div class="w-full md:w-1/2 mb-6 md:mb-0 px-3">
							<legend class="block mb-2 font-semibold">How do you want to be contacted?*</legend>
							<div class="flex gap-1">
								<label class="focus-within:outline outline-blue-500 outline-offset-2 border cursor-pointer border-black dark:border-white inline-flex items-center justify-center flex-1 h-[51px]" :class="preference === 'email' ? 'bg-black text-white dark:bg-white dark:text-black' : ''">
										<input type="radio" class="sr-only" name="contact_preference" x-model="preference" value="email"> Email
								</label>
								<label class="focus-within:outline outline-blue-500 outline-offset-2  border cursor-pointer border-black dark:border-white inline-flex items-center justify-center flex-1 h-[51px]" :class="preference === 'phone' ? 'bg-black text-white dark:bg-white dark:text-black' : ''">
										<input type="radio" class="sr-only" name="contact_preference" x-model="preference" value="phone"> Phone
								</label>
									<label class="focus-within:outline outline-blue-500 outline-offset-2  border cursor-pointer border-black dark:border-white inline-flex items-center justify-center flex-1 h-[51px]" :class="preference === 'both' ? 'bg-black text-white dark:bg-white dark:text-black' : ''">
										<input type="radio" class="sr-only" name="contact_preference" x-model="preference" value="both"> Both
								</label>
							</div>
							<span class="block text-sm text-neutral-500 mt-2 md:hidden">Your data is never shared or sold and is deleted after 90 days.</span>
					</div>
	
						<div x-show="preference != 'phone'" class="w-full px-3 md:w-1/2">
								<label class="block font-semibold mb-2" for="contact-email">
										Email address&ast;
								</label>
	
								<input
										type="email"
										id="contact-email"
										placeholder="e.g. welcome@flavortown.com"
										name="email"
										class="border-not-black dark:border-not-white block w-full border mb-2 px-4 py-3"
										:required="preference != 'phone'"
								>
						</div>

						<div x-show="preference != 'email'" class="w-full px-3 md:w-1/2">
								<label class="block font-semibold mb-2" for="contact-phone">
										Phone number&ast;
								</label>
	
								<input
										type="tel"
										id="contact-phone"
										placeholder="e.g. (555) 867-5309"
										name="phone"
										class="border-not-black dark:border-not-white block w-full border mb-2 px-4 py-3"
										:required="preference != 'email'"
								>
						</div>
				</div>

				<div class="w-full mb-4">
					<label for="interest" class="block font-semibold mb-2">What would you like to talk about?</label>
					<div class="relative after:pointer-events-none after:size-4 after:rotate-45 after:block after:absolute after:top-1/2 after:right-4 after:border-r-2 after:translate-y-[-75%] after:border-black after:dark:border-white after:border-b-2">
						<select @change="$store.visitor.interest = $event.target.value, $store.visitor.from = $event.target.value" class="appearance-none block w-full h-[51px] px-4 border border-black dark:border-white" name="interest" id="interest">
							<option value="hello">Just saying hello</option>
							<option value="websites" :selected="$store.visitor.interest.includes('websites')">Websites</option>
							<option value="ecommerce" :selected="$store.visitor.interest.includes('ecommerce')">E-Commerce</option>
							<option value="custom-web-apps" :selected="$store.visitor.interest.includes('custom-web-apps')">Custom Web Apps</option>
							<option value="digital-consulting" :selected="$store.visitor.interest.includes('digital-consulting')">Digital Consulting</option>
							<option value="special">Something Special</option>
						</select>
					</div>
				</div>
	
				<div class="w-full mb-8">
						<label class="block font-semibold mb-2" for="contact-message">
								Message&ast;
						</label>
	
						<textarea
								id="contact-message"
								rows="4"
								name="message"
								class="border-not-black dark:border-not-white block w-full border appearance-none mb-2 px-4 py-3"
								required
								:placeholder="$store.visitor.prefill"
							></textarea>
							<span class="md:block text-sm text-neutral-500 mb-2 hidden">Frendo never shares or sells your data. All data is deleted after 90 days.</span>
				</div>
	
				<div class="flex justify-center w-full">
						<input
								type="submit"
								value="Submit"
								class="btn-flashy"
						>
				</div>
		</form>
	</div>
</div>
@stop
@push('scripts')
<script>
  document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('contact-name').focus();
  });
</script>
@endpush