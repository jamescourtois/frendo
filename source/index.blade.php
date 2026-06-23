@extends('_layouts.main')


@section('body')
		<x-header>
			<x-slot name="h1">
				Frendo Web Development + Consulting
			</x-slot>
			<x-slot name="h2">
				<span x-data="{ headline: '' }" x-init="headline = !$store.visitor.firstVisitDate || $store.visitor.firstVisitDate === new Date().toDateString() ? 'It&rsquo;s nice to meet you.' : 'Nice to see you again.'" x-text="headline"></span>
			</x-slot>
			<x-slot name="desc">
				<span x-data="{ desc: '' }" x-init="desc = !$store.visitor.firstVisitDate || $store.visitor.firstVisitDate === new Date().toDateString() ? 'The web is a big place and everyone needs help getting around. You found a web developer that knows the lay of the land. Check out the core services below and let\'s get started.' : 'Choosing the right web developer and the best plan of action is important.'" x-text="desc"></span>
				<span class="inline" x-show="$store.visitor.firstVisitDate != null && $store.visitor.firstVisitDate != new Date().toDateString()">
					<span x-show="$store.visitor.interest == 'websites'">Pick up where you left off with with Frendo's <a href="/services/websites">Website Services.</a></span>
					<span x-show="$store.visitor.interest == 'ecommerce'">Pick up where you left off with with Frendo's <a href="/services/ecommerce">E-commerce Services.</a></span>
					<span x-show="$store.visitor.interest == 'custom-web-apps'">Pick up where you left off with with Frendo's <a href="/services/custom-web-apps">Custom Web App Services.</a></span>
					<span x-show="$store.visitor.interest == 'digital-consulting'">Pick up where you left off with with Frendo's <a href="/services/digital-consulting">Digital Consulting Services.</a></span>
					<span>When you are ready, <a href="/contact">reach out.</a> The first step is always a simple conversation.</span>
				</span>
			</x-slot>
		</x-header>
		@include('_layouts.service-blocks')
		<x-custom-content-wrap>
			<x-slot name="content">
				<h3>You are in the right place.</h3>
				<p>Frendo offers <a href="/services">four core services</a> that cover everything you need to own a piece of the internet. Backed by 15 years of industry experience, you can trust your project is in the right hands.</p>
				<h3>Own your digital home.</h3>
				<p>It can feel like the big platforms own the web, but this is just not true. The digital world always has new territory you can expand into and stake your claim. <a href="/about">Frendo has the experience</a> to make sure you thrive online.</p>
				<h3>Start with what you have.</h3>
				<p>You don't need to have your budget nailed down or an official design brief written up. The first step is always a conversation. Share your story, arm yourself with the facts, reflect on your needs. You'll know when it's time to make a move. <a href="/contact">Reach out to Frendo</a> when you're ready.</p>
			</x-slot>
		</x-custom-content-wrap>
@endsection
@section('cta')
	@include('_layouts.cta',[
		'title' => 'Let&rsquo;s build a better web together.',
		'link_text' => 'Contact Frendo',
	])
@endsection

@push('scripts')
<script>
  window.addEventListener('scroll', () => {
    Alpine.store('visitor').from = 'home'
  }, { once: true })
</script>
@endpush