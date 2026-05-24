@extends('_layouts.main')


@section('header')

		@include('_layouts.header', [
			'h1' => 'Web Development & Consulting based in St. Louis MO',
			'h2' => 'Your ethical digital partner.',
			'desc' => 'Check out each core service below. Whether you need a brand new website or a simple bug fix, you are in the right place. Let Frendo guide you to the best and most efficient answers for all your web needs. You have a partner you can trust with online presence. <a href="/contact" class="text-green-700 hover:text-green-900 dark:text-green-300 dark:hover:text-green-600">Reach out</a> anytime.',
		])

@endsection
@section('body-full')
		<ul class="list-none grid md:grid-cols-4 lg:grid-cols-12 gap-1 px-1 text-gray-950 dark:text-gray-200">
			<li class="flex flex-col justify-start items-start md:col-span-2 lg:col-span-6 bg-blue-300 dark:bg-blue-950 p-10 lg:p-20">
				<h2 class="mt-0 mb-2 dark:text-white lg:text-5xl text-gray-950">Websites</h2>
				<p class="mt-0 mb-4">Your website is your digital flagship. Users demand original content, modern design and lightspeed performance. Are you sharing the right message and the best experience?</p>
				<a href="/services/websites" class="mt-auto btn-green px-4 py-2 rounded-full">View All Website Services</a>
			</li>
			<li class="flex flex-col justify-start items-start md:col-span-2 lg:col-span-6 bg-green-300 dark:bg-green-700 p-10 lg:p-20">
				<h2 class="mt-0 mb-2 dark:text-white lg:text-5xl text-gray-950">E-Commerce</h2>
				<p class="mt-0 mb-4">It's easier than ever to sell directly to your raving fans. Are you ready to discover the best e-commerce stack?</p>
				<a href="/services/ecommerce" class="mt-auto btn-green px-4 py-2 rounded-full">View All E-Commerce Services</a>
			</li>
			<li class="flex flex-col justify-start items-start md:col-span-2 lg:col-span-6 bg-yellow-300 dark:bg-red-700 p-10 lg:p-20">
				<h2 class="mt-0 mb-2 dark:text-white lg:text-5xl text-gray-950">Custom Web Apps</h2>
				<p class="mt-0 mb-4">When you boldly go where none have gone before, you need custom web apps that power productivity and create visibility.</p>
				<a href="/services/custom-web-apps" class="mt-auto btn-green px-4 py-2 rounded-full">View All Custom Web App Services</a>
			</li>
			<li class="flex flex-col justify-start items-start md:col-span-2 lg:col-span-6  bg-cyan-200 dark:bg-cyan-700 p-10 lg:p-20">
				<h2 class="mt-0 mb-2 dark:text-white lg:text-5xl text-gray-950">Digital Consulting</h2>
				<p class="mt-0 mb-4">Crafting the right technical strategy is mission critical. A solid digital foundation is the launch pad for everything else. Are you leveraging the best web technologies?</p>
				<a href="/services/digital-consulting" class="mt-auto btn-green px-4 py-2 rounded-full">View All Digital Consulting Services</a>
			</li>
		</ul>
		<div class="flex flex-col container mx-auto lg:mt-24 mt-10 px-4">
			<div class="flex-1 mx-auto">
				<h2 class="uppercase mb-6 text-xs tracking-widest m-0">Why work with Frendo?</h2>
			</div>
			<div class="flex-1 max-w-[800px] mx-auto">
				<h3 class="dark:text-white text-emerald-950 text-4xl">Create a digital home base you actually own.</h3>
				<p class="mt-0 mb-4"><span class="font-bold">Do you truly own your website?</span> If you pay a subscription for an all-in-one service, the answer is likely no. You are essentially renting
					your website, including all of the data and content. When you want to move your site to a new service, you will have to start over from zero. This can lead to big headaches down the road as your web needs evolve.</p>
				<p class="mt-0 mb-0">Build with Frendo and maintain full ownership of your code, content and data. Migrate anytime and take it all with you. If maintenance and overhead get too heavy, <a class="text-green-700 hover:text-green-900 dark:text-green-300 dark:hover:text-green-600" href="/contact">Frendo is here</a> to do the lifting. </p>
			</div>
		</div>
		<div class="flex flex-col container mx-auto mt-10 mb-24 px-4">
			<div class="flex-1 max-w-[800px] mx-auto">
				<h3 class="dark:text-white text-emerald-950 text-4xl">Put your money where your code is.</h3>
				<p class="mt-0 mb-4">Working with Frendo means your investment goes directly into crafting your project. You never pay for layers of
					account managers, emails, status meetings, or agency bloat. Your money translates into valuable, productive work.
					By leveraging modern open source stacks like Laravel, Ruby on Rails, and WordPress, Frendo builds high performance sites that are cost
					efficient.</p>
					<p class="mt-0">Invest in your future with Frendo and build a web system that can be expanded in the future to match your growth. <a class="text-green-700 hover:text-green-900 dark:text-green-300 dark:hover:text-green-600" href="/contact">Frendo is ready</a> to chart your course. </p>
			</div>
		</div>

		<div class="w-full bg-green-200 dark:bg-yellow-500 flex px-4 text-center items-center justify-center flex-col py-24">
			<h2 class="text-[4rem] lg:text-[6rem] xl:text-[12rem] xl:leading-[12.5rem] leading-[4.5rem] lg:leading-[6.5rem] text-emerald-950 dark:text-not-black">Let's crush your {{ date('Y') }} web goals together.</h2>
			<a href="/contact" class="min-w-[260px] mt-10 text-4xl btn-not-black hidden dark:inline-flex px-8 py-4 rounded-full">Contact Frendo</a>
			<a href="/contact" class="min-w-[260px] mt-10 text-4xl btn-green dark:hidden px-8 py-4 rounded-full">Contact Frendo</a>
		</div>
@endsection