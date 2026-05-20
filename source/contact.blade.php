---
title: Contact
description: Get in touch with us
---
@extends('_layouts.main')

@section('body')
<div class="flex flex-col items-center justify-center text-center mb-2 lg:mb-8">
	<h1 class="uppercase text-xs m-0 font-normal tracking-widest"></h1>
	<h2 class="mt-3 leading-[2.8rem] text-5xl"></h2>
</div>
@include('_layouts.header', [
	'h1' => 'Contact Frendo',
	'h2' => 'Don&rsquo;t be a stranger.',
	'desc' => 'Frendo is here for your web needs. Wherever you are in your journey, Frendo is ready to step in.',
])

<div class="flex flex-col lg:flex-row items-start justify-start gap-8">
	<div class="w-full lg:w-1/3 lg:order-2 flex flex-wrap justify-around items-start lg:justify-between">
		<p class="mb-8 mt-0 hidden sm:block">
				Big ideas start with small talk. Don't hesitate to reach out and learn how Frendo elevates your online presence.
		</p>
		<ul class="list-none text-center lg:text-left m-0 text-xl"> 
			<li class="uppercase text-xs m-0 font-normal tracking-widest">Call or text</li>
			<li class="mb-2"><a href="tel:+13146687244">(314) 668-7244</a></li>
		</ul>
		<ul class="list-none text-center lg:text-left m-0 text-xl"> 
			<li class="uppercase text-xs m-0 font-normal tracking-widest">Send a note</li>
			<li><a href="mailto:james@frendo.dev">james@frendo.dev</a></li>
		</ul>
	</div>
	<div class="w-full lg:w-2/3 p-8 shadow-lg bg-cyan-100 dark:bg-gray-800">
		<span class="block text-center mb-4 uppercase text-xs m-0 font-normal tracking-widest">Official Contact Form</span>
		<form class="form-style" method="POST" action="https://api.form-data.com/f/xxunkl9ky5eslugaxr3qcb" class="mb-12">
				<div class="flex flex-wrap mb-6 -mx-3">
						<div class="w-full md:w-1/2 mb-6 md:mb-0 px-3">
								<label class="block mb-2 font-semibold" for="contact-name">
										Name&ast;
								</label>
	
								<input
										type="text"
										id="contact-name"
										placeholder="e.g. Guy Fieri"
										name="name"
										class="bg-white/85 dark:bg-gray-900 border-cyan-200 dark:border-black outline-hidden inset-shadow-sm block w-full border    mb-2 px-4 py-3"
										required
								>
						</div>
	
						<div class="w-full px-3 md:w-1/2">
								<label class="block font-semibold mb-2" for="contact-email">
										Email Address&ast;
								</label>
	
								<input
										type="email"
										id="contact-email"
										placeholder="e.g. welcome@flavortown.com"
										name="email"
										class="bg-white/85 dark:bg-gray-900 border-cyan-200 dark:border-black outline-hidden inset-shadow-sm block w-full border mb-2 px-4 py-3"
										required
								>
						</div>
				</div>
	
				<div class="w-full mb-12">
						<label class="block font-semibold mb-2" for="contact-message">
								Message&ast;
						</label>
	
						<textarea
								id="contact-message"
								rows="4"
								name="message"
								class="bg-white/85 dark:bg-gray-900 border-cyan-200 dark:border-black outline-hidden inset-shadow-sm block w-full border appearance-none mb-2 px-4 py-3"
								placeholder="Share your thoughts here."
								required
						></textarea>
				</div>
	
				<div class="flex justify-center w-full">
						<input
								type="submit"
								value="Submit"
								class="btn-special min-w-[260px] text-xl px-5 py-3 text-white rounded-full font-bold cursor-pointer"
						>
				</div>
		</form>
		<span class="inline-block mt-8 text-xs leading-[1rem]">Frendo never sells or shares your data. All form data is deleted after 90 days. Entries are handled securely via <a href="https://form-data.com">form-data.com</a>.</span>
	</div>
</div>
@stop
