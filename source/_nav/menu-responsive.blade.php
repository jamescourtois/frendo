<nav
	x-cloak
	:class="[navOpen ? 'block left-0 opacity-100' : 'left-[100vw] opacity-0 pointer-events-none', $store.theme.dark ? 'bg-black/70' : 'bg-white/70']" 
	id="js-nav-menu" 
	class="w-full h-full inset-0 duration-150 ease-out overscroll-contain flex justify-center flex-wrap pt-32 pb-8 px-2 backdrop-blur-md fixed z-[98]">
    <ul class="list-none w-full text-center flex flex-col m-0 p-0 " :class="navOpen ? 'opacity-100 duration-400' : 'opacity-0'">
			<li class="pl-4">
				<a
				title="{{ $page->siteName }} About"
				href="/"
				class="block mt-0 mb-4 text-4xl no-underline {{ $page->getPath() == '' ? 'active text-blue-500' : 'hover:text-blue-500' }}"
				>Home </a>
			</li>
			<li class="pl-4">
				<a
				title="{{ $page->siteName }} Services"
				href="/services"
				class="block mt-0 mb-4 text-4xl no-underline {{ $page->isActive('/services') ? 'active text-blue-500' : 'hover:text-blue-500' }}"
				>Services </a>
			</li>

			</li>
			<li class="pl-4">
				<a
				title="{{ $page->siteName }} Work"$
				href="/about"
				class="block mt-0 mb-4 text-4xl no-underline {{ $page->isActive('/work') ? 'active text-blue-500' : 'hover:text-blue-500' }}"
				>Work</a>
			</li>
			<li class="pl-4">
				<a
				title="{{ $page->siteName }} About"$
				href="/about"
				class="block mt-0 mb-4 text-4xl no-underline {{ $page->isActive('/about') ? 'active text-blue-500' : 'hover:text-blue-500' }}"
				>About</a>
			</li>
			<li class="pl-4">
				<a
				title="{{ $page->siteName }} Blog"
				href="/blog"
				class="block mt-0 mb-4 text-4xl no-underline {{ $page->isActive('/blog') ? 'active text-blue-500' : 'hover:text-blue-500' }}"
				>Blog</a>
			</li>
			<li class="pl-4">
				<a
				title="{{ $page->siteName }} Contact"
				href="/contact"
				class="block mt-0 mb-4 text-4xl no-underline {{ $page->isActive('/contact') ? 'active text-blue-500' : 'hover:text-blue-500' }}"
				>Contact</a>
			</li>
    </ul>

		
			<button class="self-end" @click="$store.theme.toggle()" aria-name="Toggle dark theme">
				<span x-text="$store.theme.dark ? 'Switch to Light Mode' : 'Switch to Dark Mode'">Dark theme</span>
			</button>
		
</nav>
