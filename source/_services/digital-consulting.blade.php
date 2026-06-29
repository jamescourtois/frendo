---
title: Digital Consulting
description: Ask Frendo.
---
@extends('_layouts.main')

@section('body')

	<x-header>
		<x-slot name="h1">
			Digital Consulting Services
		</x-slot>
		<x-slot name="h2">
			See the path.
		</x-slot>
		<x-slot name="desc">
			Encountering a problem that stops you dead in your tracks is a rite of passage in the web world. The good news is Frendo has already been there.
		</x-slot>
	</x-header>

	<x-prompt question="Which of these sounds most like you?">
		
		<x-prompt-option id="admin">"I need someone to manage my site for me."</x-prompt-option>
		
		<x-prompt-option id="strategy">"I have a great site, what should I do next?"</x-prompt-option>
		
		<x-prompt-option id="takeovers">"I inherited a site, what do I do with it?"</x-prompt-option>
		
		<x-prompt-option id="train">"How do I manage my site by myself?"</x-prompt-option>
		
		<x-prompt-option id="audits">"Is my website doing what it is supposed to?"</x-prompt-option>
		
		<x-prompt-option id="novice">"I have absolutely no idea where to begin."</x-prompt-option>
	
	</x-prompt>

	<x-content-blocks-wrapper>
		
			<x-content-block id="admin">
				<x-slot name="kicker_text">
					Admin
				</x-slot>
				<x-slot name="title_text">You already have a job.</x-slot>
				<x-slot name="content">
					<p>There are only so many hours in the day and web updates are easy to leave on the back burner. Frendo is a web expert you can trust to admin your site. Get back all the time you would have spent worrying about content updates or expired plugins.</p>
				</x-slot>
				<x-slot name="button_text">
					Free up your time
				</x-slot>
			</x-content-block>

			<x-content-block id="strategy">
				<x-slot name="kicker_text">
					Digital Strategy
				</x-slot>
				<x-slot name="title_text">Don't stop now.</x-slot>
				<x-slot name="content">
					<p>A great website is the start, not the finish line. Now that you are gaining traction with your audience, it's time to decide what comes next. Keep iterating on what is working. Make small tweaks and measure their impact. Partner with Frendo and we'll keep up the pace.</p>
				</x-slot>
				<x-slot name="button_text">
					Keep going
				</x-slot>
			</x-content-block>

			<x-content-block id="takeovers">
				<x-slot name="kicker_text">
					Site Takeovers
				</x-slot>
				<x-slot name="title_text">Legacy websites are like a box of chocolates.</x-slot>
				<x-slot name="content">
					<p>Taking over a website built by someone else can leave a weird taste. You never know exactly what you have until you take a bite. Let Frendo taste test your new-to-you website and let you know if it has nuts.</p>
				</x-slot>
				<x-slot name="button_text">
					Let's tear it open
				</x-slot>
			</x-content-block>


			<x-content-block id="train">
				<x-slot name="kicker_text">
					CMS & Admin Training
				</x-slot>
				<x-slot name="title_text">If you can use social media, you can admin a site.</x-slot>
				<x-slot name="content">
					<p>Understanding how your website works puts you in control. Frendo walks you through everything at your pace with no judgment, no rushing, and all the answers you need.</p>
				</x-slot>
				<x-slot name="button_text">
					Let's write a lesson plan
				</x-slot>
			</x-content-block>

			<x-content-block id="audits">
				<x-slot name="kicker_text">
					Site Audits
				</x-slot>
				<x-slot name="title_text">Pull back the curtain.</x-slot>
				<x-slot name="content">
					<p>Does your SEO actually show up in results? Can screen readers make sense of your layout? Are your requests failing silently in the background? Let Frendo take a look backstage so you can keep your show on the road.</p>
				</x-slot>
				<x-slot name="button_text">
					Run a full report
				</x-slot>
			</x-content-block>


			<x-content-block id="novice">
				<x-slot name="kicker_text">
					Guidance
				</x-slot>
				<x-slot name="title_text">Start with the "why."</x-slot>
				<x-slot name="content">
					<p>Websites are both something we use daily and something almost undefinable. A website can be anything, built any way, on any size screen, loaded any time of day. Before you write a single line of code, let's work backwards from your end goal.</p>
				</x-slot>
				<x-slot name="button_text">
					Let's talk it out
				</x-slot>
			</x-content-block>
			
		
</x-content-blocks-wrapper>
@endsection
@section('cta')
	@include('_layouts.cta',[
		'title' => 'Knowing is half the battle.',
		'link_text' => 'Consult Frendo',
	])
@endsection
@push('scripts')
<script>
  window.addEventListener('scroll', () => {
    Alpine.store('visitor').from = 'digital-consulting'
    Alpine.store('visitor').interest = 'digital-consulting'
		Alpine.store('visitor').cta = null
  }, { once: true })
</script>
@endpush