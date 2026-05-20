<nav class="hidden lg:flex items-center justify-end text-lg">
    <button title="{{ $page->siteName }} Services" x-data="{subNavOpen: false}"
				@keydown.enter="subNavOpen = !subNavOpen"
				@mouseenter="subNavOpen = true"
				@mouseleave="subNavOpen = false"
				@click.outside="subNavOpen = false"
				:class="subNavOpen ? 'active text-blue-600 dark:text-cyan-300' : 'text-slate-700 dark:text-white hover:text-blue-600 dark:hover:text-cyan-300'"
        class="group ml-6 cursor-pointer relative pr-[22px] font-semibold text-xl">
        Services
				<span class="block absolute right-0 top-0 w-[19px] h-[27px]">
					<span :class="subNavOpen ? ' bg-blue-600 dark:bg-cyan-300' : ' bg-black dark:bg-white'" class="rotate-[45deg] block absolute transition duration-50 top-[50%] left-0 w-[12px] h-[3px] rounded-full group-hover:bg-blue-600 group-hover:dark:bg-cyan-300"></span>
					<span :class="subNavOpen ? ' bg-blue-600 dark:bg-cyan-300' : ' bg-black dark:bg-white'" class="rotate-[-45deg] block absolute transition duration-50 top-[50%] right-0 w-[12px] h-[3px] rounded-full group-hover:bg-blue-600 group-hover:dark:bg-cyan-300"></span>
				</span>
				<ul x-collapse x-show="subNavOpen" class="py-2 border-l-2 dark:border-gray-700 shadow-lg border-blue-400 dark:border-not-black w-[250px] text-left absolute top-full left-0 duration-500 transition list-none m-0 p-0 bg-blue-100 dark:bg-black">
					<li>
						<a
							class="block dark:text-white dark:hover:text-cyan-300 text-xl px-4 py-2"
							title="Services Overview"
							href="/services">
							 Overview
						</a>
					</li>
					<li>
						<a
							class="block dark:text-white dark:hover:text-cyan-300 text-xl px-4 py-2"
							title="Website Services"
							href="/services/websites">
								Websites
						</a>
					</li>
					<li>
						<a
							class="block dark:text-white dark:hover:text-cyan-300 text-xl px-4 py-2"
							title="E-Commerce Services"
							href="/services/ecommerce">
								E-Commerce
						</a>
					</li>
					<li>
						<a
							class="block dark:text-white dark:hover:text-cyan-300 text-xl px-4 py-2"
							title="Custom Web Apps"
							href="/services/custom-web-apps">
								Custom Web Apps
						</a>
					</li>
					<li>
						<a
							class="block dark:text-white dark:hover:text-cyan-300 text-xl px-4 py-2"
							title="Digital Consulting"
							href="/services/digital-consulting">
								Digital Consulting
						</a>
					</li>
				</ul>
    </button>

		<a title="{{ $page->siteName }} About" href="/about"
        class="ml-6 text-xl text-slate-700 dark:text-white hover:text-blue-600 dark:hover:text-cyan-300 {{ $page->isActive('/about') ? 'active text-blue-600' : '' }}">
        About
    </a>

		<a title="{{ $page->siteName }} About" href="/blog"
        class="ml-6 text-xl text-slate-700 dark:text-white hover:text-blue-600 dark:hover:text-cyan-300 {{ $page->isActive('/blog') ? 'active text-blue-600' : '' }}">
        Blog
    </a>


    <a title="{{ $page->siteName }} Contact" href="/contact"
        class="ml-6 text-xl text-slate-700 dark:text-white hover:text-blue-600 dark:hover:text-cyan-300 {{ $page->isActive('/contact') ? 'active text-blue-600' : '' }}">
        Contact
    </a>
</nav>
