---
title: Digital Consulting
description: Ax me summin
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

	<x-prompt question="Which of these sounds the most like you?">
		<x-prompt-option id="rebuild">"My website needs a LOT of work."</x-prompt-option>
		<x-prompt-option id="takeover">"I inherited a site, what do I do?"</x-prompt-option>
		<x-prompt-option id="team">"I want my own dev team."</x-prompt-option>
		<x-prompt-option id="strategy">"I have an idea, how do I build it?"</x-prompt-option>
		<x-prompt-option id="train">"How do I manage my site myself?"</x-prompt-option>
		<x-prompt-option id="design">"My mom said my website is ugly."</x-prompt-option>
	</x-prompt>

	<x-content-blocks-wrapper>
		
			<x-content-block id="rebuild">
				<x-slot name="kicker_text">Rebuilds</x-slot>
				<x-slot name="title_text">Get a fresh start.</x-slot>
				<x-slot name="content">
					<p>At a certain point, patching things up costs more than starting fresh. Frendo handles the full transition from your old site to the new, making sure nothing is lost in the process.</p>
				</x-slot>
				<x-slot name="button_text">
					Start planning
				</x-slot>
			</x-content-block>
			<x-content-block id="takeover">
				<x-slot name="kicker_text">
					Takeovers
				</x-slot>
				<x-slot name="title_text">The answer is always "it depends."</x-slot>
				<x-slot name="content">
					<p>There are many ways to build websites, and some are better than others. Frendo understands the technology that powers your new site and what it is capable of.</p>
				</x-slot>
				<x-slot name="button_text">
					Let's look under the hood
				</x-slot>
			</x-content-block>
			<x-content-block id="team">
				<x-slot name="kicker_text">
					Team Building
				</x-slot>
				<x-slot name="title_text">Build the right team the right way.</x-slot>
				<x-slot name="content">
					<p>Managing developers is a skill set of its own. If you are ready to bring development in-house but are not sure how to structure it, Frendo helps you design the team, define the roles, and put the workflows in place before the first person is hired. So when your team shows up, they have something to work within</p>
				</x-slot>
				<x-slot name="button_text">
					Design your new team
				</x-slot>
			</x-content-block>
			<x-content-block id="strategy">
				<x-slot name="kicker_text">
					Strategy
				</x-slot>
				<x-slot name="title_text">Clarity without commitment.</x-slot>
				<x-slot name="content">
					<p>Knowing is half the battle. Making the investment in your new idea will require the right technology to carry you through years of growth. Frendo gets you there the smartest way possible.</p>
				</x-slot>
				<x-slot name="button_text">
					Share your vision
				</x-slot>
			</x-content-block>
			<x-content-block id="train">
				<x-slot name="kicker_text">
					Training
				</x-slot>
				<x-slot name="title_text">Be the master of your domain.</x-slot>
				<x-slot name="content">
					<p>Understanding how your website works puts you in control. Frendo walks you through everything at your pace with no judgment, no rushing, and all the answers you need.</p>
				</x-slot>
				<x-slot name="button_text">
					Book a session
				</x-slot>
			</x-content-block>
			<x-content-block id="design">
				<x-slot name="kicker_text">
					Redesign
				</x-slot>
				<x-slot name="title_text">Your mom is just trying to help.</x-slot>
				<x-slot name="content">
					<p>First impressions matter. Frendo refreshes the design and layout without touching what is under the hood. It's your site but with a better first impression. Mom will be proud.</p>
				</x-slot>
				<x-slot name="button_text">
					Start your redesign
				</x-slot>
			</x-content-block>
		
</x-content-blocks-wrapper>
@endsection
@section('cta')
	@include('_layouts.cta',[
		'title' => 'You don&rsquo;t have to say "asking for a friend."',
		'link_text' => 'Consult Frendo',
	])
@endsection
@push('scripts')
<script>
  window.addEventListener('scroll', () => {
    Alpine.store('visitor').from = 'digital-consulting'
  }, { once: true })
</script>
@endpush