<nav
	x-cloak
	:class="navOpen ? 'block left-0 opacity-100' : 'left-[100vw] opacity-0 pointer-events-none'" 
	id="js-nav-menu" 
	class="w-full bg-white/50 dark:bg-black/50 h-[100dvh] overflow-scroll inset-0 duration-150 ease-out overscroll-contain flex justify-center flex-wrap pt-32 pb-8 backdrop-blur-md fixed z-[98]">
    <ul class="list-none w-full text-center flex flex-col m-0 p-0 " :class="navOpen ? 'opacity-100 duration-400' : 'opacity-0'">
			<li class="border-b-1 border-b-neutral-200 dark:border-b-neutral-800 {{ $page->getPath() == '' ? 'hidden' : 'block' }}">
				<a
				title="About"
				href="/"
				class="block py-4  text-3xl no-underline dark:text-white"
				>Home </a>
			</li>
			<li class="border-b-1 border-b-neutral-200 dark:border-b-neutral-800">
				<a
					class="block py-4 text-3xl no-underline dark:text-white"
					title="Website Services"
					href="/services/websites">
						Websites
				</a>
			</li>
			<li class="border-b-1 border-b-neutral-200 dark:border-b-neutral-800">
				<a
					class="block py-4 text-3xl no-underline dark:text-white"
					title="E-Commerce Services"
					href="/services/ecommerce">
						E-Commerce
				</a>
			</li>
			<li class="border-b-1 border-b-neutral-200 dark:border-b-neutral-800">
				<a
					class="block py-4 text-3xl no-underline dark:text-white"
					title="Custom Web Apps"
					href="/services/custom-web-apps">
						Custom Web Apps
				</a>
			</li>
			<li class="border-b-1 border-b-neutral-200 dark:border-b-neutral-800">
				<a
					class="block py-4 text-3xl no-underline dark:text-white"
					title="Digital Consulting"
					href="/services/digital-consulting">
						Digital Consulting
				</a>
			</li>
			<li class="border-b-1 border-b-neutral-200 dark:border-b-neutral-800">
				<a
				title="About"$
				href="/about"
				class="block py-4 text-3xl no-underline dark:text-white"
				>About</a>
			</li>
			<li class="border-b-1 border-b-neutral-200 dark:border-b-neutral-800">
				<a
				title="Blog"
				href="/blog"
				class="block py-4 text-3xl no-underline dark:text-white"
				>Blog</a>
			</li>
			<li class="border-b-1 border-b-neutral-200 dark:border-b-neutral-800">
				<a
				title="Contact"
				href="/contact"
				class="block py-4 text-3xl no-underline dark:text-white"
				>Contact</a>
			</li>
    </ul>
</div>
		
</nav>
