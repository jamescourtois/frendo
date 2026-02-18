<nav 
	:class="navOpen ? 'block' : 'hidden pointer-events-none'" 
	id="js-nav-menu" 
	class="w-full h-full inset-0 flex items-center justify-center py-24 px-2 bg-white fixed z-[98]">
    <ul class="list-none m-0 p-0">
			<li class="pl-4">
				<a
				title="{{ $page->siteName }} About"
				href="/"
				class="block mt-0 mb-4 text-4xl no-underline {{ $page->isActive('/about') ? 'active text-blue-500' : 'text-gray-800 hover:text-blue-500' }}"
				>Home</a>
			</li>
			<li class="pl-4">
				<a
				title="{{ $page->siteName }} About"
				href="/about"
				class="block mt-0 mb-4 text-4xl no-underline {{ $page->isActive('/about') ? 'active text-blue-500' : 'text-gray-800 hover:text-blue-500' }}"
				>About</a>
			</li>
			<li class="pl-4">
				<a
				title="{{ $page->siteName }} Contact"
				href="/contact"
				class="block mt-0 mb-4 text-4xl no-underline {{ $page->isActive('/contact') ? 'active text-blue-500' : 'text-gray-800 hover:text-blue-500' }}"
				>Contact</a>
			</li>
			<li class="pl-4">
					<a
							title="{{ $page->siteName }} Blog"
							href="/blog"
							class="block mt-0 mb-4 text-4xl no-underline {{ $page->isActive('/blog') ? 'active text-blue-500' : 'text-gray-800 hover:text-blue-500' }}"
					>Blog</a>
			</li>
    </ul>
</nav>
