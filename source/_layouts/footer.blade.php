<footer class="pt-8 bg-gray-200 dark:bg-neutral-800" role="contentinfo">
		<div class="container mx-auto flex flex-col items-stretch lg:flex-row justify-between lg:items-start px-4 xl:px-0">
			
				<ul class="list-none rgb-fade">
					<li><div class="flex mb-4">
					@include('_layouts.logo')
				</div></li>
					<li>Web Development + Consulting</li>
					<li>
						<svg class="fill-current size-[0.75rem] translate-y-[-1px] inline-block" version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
							<path d="M16 0c-5.523 0-10 4.477-10 10 0 10 10 22 10 22s10-12 10-22c0-5.523-4.477-10-10-10zM16 16c-3.314 0-6-2.686-6-6s2.686-6 6-6 6 2.686 6 6-2.686 6-6 6z"></path>
						</svg>
						Based in St. Louis, MO
					</li>
					<li class="md:hidden text-current border border-blue-400 px-2 py-2 my-4 rounded-full text-center "><a href="/contact-card">Add Frendo as a Contact</a></li>
				</ul>
				<ul class="list-none">
					<li class="uppercase tracking-widest text-gray-500 text-sm mb-2">Info</li>
					<li><a href="/about">About Frendo</a></li>
					<li><a href="/services">Services Overview</a></li>
					<li><a href="/blog">Field Notes</a></li>
					<li><a href="/contact">Contact Frendo</a></li>
					
				</ul>
				<ul class="list-none">
					<li class="uppercase tracking-widest text-gray-500 text-sm mb-2">Services</li>
					<li><a href="/services/websites">Websites</a></li>
					<li><a href="/services/ecommerce">E-Commerce</a></li>
					<li><a href="/services/custom-web-apps">Custom Web Apps</a></li>
					<li><a href="/services/digital-consulting">Digital Consulting</a></li>
				</ul>
				<ul class="list-none">
					<li class="uppercase tracking-widest text-gray-500 text-sm mb-2">Friends</li>
					<li><a target="_blank" href="https://opensource.org/">Open Source Initiaitive</a></li>
					<li><a target="_blank" href="https://www.eff.org/">Electronic Frontier Foundation</a></li>
					<li><a target="_blank" href="https://developer.mozilla.org/en-US/">Mozilla Developer Network</a></li>
					<li><a target="_blank" href="https://epic.org/">Electronic Privacy Information Center</a></li>
				</ul>
				
		</div>
		<ul class="flex flex-col font-normal justify-center items-center list-none text-xs text-center">
				<li>
						<span class="text-lg font-light inline-block translate-y-[5px]">&copy;</span> Frendo Web Development {{ date('Y') }}. All Rights Reserved.
				</li>
				<li>
					<span class="inline-block text-xs leading-[1rem]">Frendo does not use cookies. Form secured by <a href="https://form-data.com">form-data.com</a>. All data never is shared or sold and deleted after 90 days.</span>
				</li>
		</ul>
</footer>