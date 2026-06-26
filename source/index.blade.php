@extends('_layouts.main')


@section('body')
		<x-header>
			<x-slot name="h1">
				Frendo Web Development + Digital Consulting
			</x-slot>
			<x-slot name="h2">
				<span x-data="{ headline: '' }" x-init="headline = !$store.visitor.firstVisitDate || $store.visitor.firstVisitDate === new Date().toDateString() ? 'It&rsquo;s nice to meet you.' : 'Nice to see you again.'" x-text="headline"></span>
			</x-slot>
			<x-slot name="desc">
				<span x-show="!$store.visitor.firstVisitDate || $store.visitor.firstVisitDate === new Date().toDateString()">The web is a big place and everyone needs help getting around. You found a web expert that knows the lay of the land. Check out Frendo's core services below and let's get started.</span>
				<span class="inline" x-show="$store.visitor.firstVisitDate != null && $store.visitor.firstVisitDate != new Date().toDateString()">
					<span>Pick up where you left off with Frendo's </span>
					<span x-show="$store.visitor.interest == 'websites'"><a href="/services/websites">Website Services.</a> You are in the right place for new builds or support for your existing site.</span>
					<span x-show="$store.visitor.interest == 'ecommerce'"><a href="/services/ecommerce">E-commerce Services.</a> You are in the right place to build your new online storefront or support your existing shop.</span>
					<span x-show="$store.visitor.interest == 'custom-web-apps'"><a href="/services/custom-web-apps">Custom Web App Services.</a> There are many ways to build solutions, but let's start with solving the right problem. </span>
					<span x-show="$store.visitor.interest == 'digital-consulting'"><a href="/services/digital-consulting">Digital Consulting Services.</a> The web is always evolving. Embracing change is easier with guidance. </span>
					<span>When you are ready to chat, reach out <a href="/contact">here</a>.</span>
				</span>
			</x-slot>
		</x-header>
		@include('_layouts.service-blocks')
		<x-custom-content-wrap>
			<x-slot name="content">
				<h3>You are in the right place.</h3>
				<p>Frendo offers <a href="/services">four core services</a> that include everything you need to build your own home on the web. That includes a blazing fast tech stack and 15 years of experience in branding, design and full stack web development.</p>
				<h3>Own your home online.</h3>
				<p>These days it can feel like the big platforms own the entire web. Thankfully that is just not true. The digital world always has new territory for you to stake your claim. <a href="/about">Frendo has the experience</a> to make sure you thrive online.</p>
				<h3>Start with what you have.</h3>
				<p>You don't need to have a budget or an official request for proposal. The first step is always a simple conversation. Share your story, arm yourself with facts, reflect on your needs. You'll know when it's time to make a move. <a href="/contact">Reach out</a> when you're ready.</p>
			</x-slot>
		</x-custom-content-wrap>
@endsection
@section('cta')
	@include('_layouts.cta',[
		'title' => 'Build the web you want to see.',
		'link_text' => 'Contact Frendo',
	])
@endsection

@push('scripts')
<script>
  document.addEventListener('DOMContentLoaded', () => {
    Alpine.store('visitor').from = 'home'
    Alpine.store('visitor').cta = null
  }, { once: true })
</script>
@endpush