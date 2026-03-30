<nav class="hidden lg:flex items-center justify-end text-lg">
    <button title="{{ $page->siteName }} Services" x-data="{subNavOpen: false}"
				@click="subNavOpen = !subNavOpen"
        class="ml-6 relative font-semibold text-gray-700 hover:text-blue-600 {{ $page->isActive('/services') ? 'active text-blue-600' : '' }}">
        Services
				<span class="block absolute right-[30px] top-0 w-[32px] h-[69px]">
					<span :class="subNavOpen ? 'rotate-[-45deg]' : 'rotate-[45deg]'" class="block absolute transition duration-100 top-[50%] left-0 w-[20px] h-[4px] rounded-full bg-blue-500"></span>
					<span :class="subNavOpen ? 'rotate-[45deg]' : 'rotate-[-45deg]'" class="block absolute transition duration-100 top-[50%] right-0 w-[20px] h-[4px] rounded-full bg-blue-500"></span>
				</span>
				<ul x-collapse x-show="subNavOpen"  @click.outside="subNavOpen = false"  class="w-[250px] text-left absolute top-full left-0 duration-500 transition list-none m-0 p-0 bg-blue-100/40 py-4">
					<li>
						<a
							class="mb-4 block text-xl"
							title="Services Overview"
							href="/services">
								Overview
						</a>
					</li>
					<li>
						<a
							class="mb-4 block text-xl"
							title="Website Services"
							href="/services/websites">
								Websites
						</a>
					</li>
					<li>
						<a
							class="mb-4 block text-xl"
							title="E-Commerce Services"
							href="/services/ecommerce">
								E-Commerce
						</a>
					</li>
					<li>
						<a
							class="mb-4 block text-xl"
							title="Custom Web Apps"
							href="/services/custom-web-apps">
								Custom Web Apps
						</a>
					</li>
					<li>
						<a
							class="mb-0 block text-xl"
							title="Digital Consulting"
							href="/services/digital-consulting">
								Digital Consulting
						</a>
					</li>
				</ul>
    </button>

		<a title="{{ $page->siteName }} About" href="/about"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/about') ? 'active text-blue-600' : '' }}">
        About
    </a>

		<a title="{{ $page->siteName }} About" href="/blog"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/blog') ? 'active text-blue-600' : '' }}">
        Blog
    </a>


    <a title="{{ $page->siteName }} Contact" href="/contact"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/contact') ? 'active text-blue-600' : '' }}">
        Contact
    </a>
</nav>
