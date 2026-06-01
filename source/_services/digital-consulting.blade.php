---
title: Digital Consulting
description: Ax me summin
---
@extends('_layouts.main')

@section('body')

	@include('_layouts.header', [
		'h1' => 'Digital Consulting Services',
		'h2' => 'It&rsquo;s okay to ask for help.',
		'desc' => 'In the web world, it is a rite of passage to encounter a problem that stops you dead in your tracks. The good news is Frendo has already been there.',
	])

	@include('_layouts.prompt', [
    'question' => 'Which of these sounds the most like you?',
    'answers' => [
		['text' => '"My website needs a LOT of work."', 'id' => 'rebuild'],
		['text' => '"I inherited a site, what do I do?"', 'id' => 'takeover'],
		['text' => '"I want my own dev team."', 'id' => 'team'],
		['text' => '"I have an idea, how do I build it?"', 'id' => 'strategy'],
		['text' => '"I need to learn how to manage my site"', 'id' => 'train'],
		['text' => '"My mom said my website is ugly."', 'id' => 'design'],
    ],
	])

	<x-content-blocks-wrapper>
		<x-slot name="blocks">
			<x-content-block>
				<x-slot name="id">rebuild</x-slot>
				<x-slot name="kicker_text">Rebuilds</x-slot>
				<x-slot name="title_text">Get a fresh start.</x-slot>
				<x-slot name="content">
					<p>At a certain point, patching things up costs more than starting fresh. Frendo handles the full transition from your old site to the new, making sure nothing is lost in the process.</p>
				</x-slot>
				<x-slot name="button_text">
					Start planning
				</x-slot>
			</x-content-block>
			<x-content-block>
				<x-slot name="id">
					takeover
				</x-slot>
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
			<x-content-block>
				<x-slot name="id">
					team
				</x-slot>
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
			<x-content-block>
				<x-slot name="id">
					strategy
				</x-slot>
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
			<x-content-block>
				<x-slot name="id">
					train
				</x-slot>
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
			<x-content-block>
				<x-slot name="id">
					design
				</x-slot>
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
		</x-slot>
</x-content-blocks-wrapper>

	@include('_layouts.cta',[
		'title' => 'You don&rsquo;t have to say "asking for a friend."',
		'link_text' => 'Consult Frendo',
	])
@endsection