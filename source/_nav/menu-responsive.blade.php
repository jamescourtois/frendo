<nav
	x-cloak
	:class="navOpen ? 'block left-0 opacity-100' : 'left-[100vw] opacity-0 pointer-events-none'" 
	class="w-full bg-white/50 dark:bg-black/50 h-[100dvh] overflow-scroll inset-0 duration-150 ease-out overscroll-contain flex justify-center flex-wrap pt-28 pb-8 backdrop-blur-md fixed z-[98]">
    <ul class="list-none w-full text-left flex flex-col m-0 p-0 " :class="navOpen ? 'opacity-100 duration-400' : 'opacity-0'">
			<li class="border-b-1 border-b-neutral-300 dark:border-b-neutral-800">
				<a
				title="About"
				href="/"
				class="block p-4 text-2xl pl-8 no-underline dark:text-white border-l-8 border-transparent {{ $page->getPath() == '' ? 'active' : '' }}"
				>Home </a>
			</li>
			<li class="border-b-1 border-b-neutral-300 dark:border-b-neutral-800">
				<a
					class="block p-4 text-2xl pl-8 no-underline dark:text-white border-l-8 border-transparent {{ $page->isActive('/websites') ? 'active' : '' }}"
					title="Website Services"
					href="/services/websites">
						Websites
				</a>
			</li>
			<li class="border-b-1 border-b-neutral-300 dark:border-b-neutral-800">
				<a
					class="block p-4 text-2xl pl-8 no-underline dark:text-white border-l-8 border-transparent {{ $page->isActive('/ecommerce') ? 'active' : '' }}"
					title="E-Commerce Services"
					href="/services/ecommerce">
						E-Commerce
				</a>
			</li>
			<li class="border-b-1 border-b-neutral-300 dark:border-b-neutral-800">
				<a
					class="block p-4 text-2xl pl-8 no-underline dark:text-white border-l-8 border-transparent {{ $page->isActive('/custom-web-apps') ? 'active' : '' }}"
					title="Custom Web Apps"
					href="/services/custom-web-apps">
						Custom Web Apps
				</a>
			</li>
			<li class="border-b-1 border-b-neutral-300 dark:border-b-neutral-800">
				<a
					class="block p-4 text-2xl pl-8 no-underline dark:text-white border-l-8 border-transparent {{ $page->isActive('/digital-consulting') ? 'active' : '' }}"
					title="Digital Consulting"
					href="/services/digital-consulting">
						Digital Consulting
				</a>
			</li>
			<li class="border-b-1 border-b-neutral-300 dark:border-b-neutral-800">
				<a
				title="About"$
				href="/about"
				class="block p-4 text-2xl pl-8 no-underline dark:text-white border-l-8 border-transparent {{ $page->isActive('/about') ? 'active' : '' }}"
				>About</a>
			</li>
			<li class="border-b-1 border-b-neutral-300 dark:border-b-neutral-800">
				<a
				title="Blog"
				href="/blog"
				class="block p-4 text-2xl pl-8 no-underline dark:text-white border-l-8 border-transparent {{ $page->isActive('/blog') ? 'active' : '' }}"
				>Blog</a>
			</li>
			<li class="border-b-1 border-b-neutral-300 dark:border-b-neutral-800">
				<a
				title="Contact"
				href="/contact"
				class="block p-4 text-2xl pl-8 no-underline dark:text-white border-l-8 border-transparent {{ $page->isActive('/contact') ? 'active' : '' }}"
				>Contact</a>
			</li>
    </ul>
</div>
		
</nav>
