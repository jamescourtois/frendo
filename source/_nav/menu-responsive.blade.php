<nav
	x-cloak
	:class="[navOpen ? 'block left-0 opacity-100' : 'left-[100vw] opacity-0 pointer-events-none', $store.theme?.dark ? 'bg-black/70' : 'bg-white/70']" 
	id="js-nav-menu" 
	class="w-full h-[100dvh] overflow-scroll inset-0 duration-150 ease-out overscroll-contain flex justify-center flex-wrap pt-32 pb-8 backdrop-blur-md fixed z-[98]">
    <ul class="list-none w-full text-center flex flex-col m-0 p-0 " :class="navOpen ? 'opacity-100 duration-400' : 'opacity-0'">
			<li class="border-b-1 border-b-blue-200 {{ $page->getPath() == '' ? 'hidden' : 'block' }}">
				<a
				title="About"
				href="/"
				class="block py-4 bg-white/25 text-3xl no-underline hover:text-blue-500"
				>Home </a>
			</li>
			<li class="border-b-1 border-b-blue-200 relative" x-data="{subNavOpen: false}">
				<button
				title="Services"
				@click="subNavOpen = !subNavOpen"
				class="block w-full py-4 text-center text-blue-500 font-semibold text-3xl no-underline"
				>
				Services
					<span class="block absolute right-[30px] top-0 w-[32px] h-[69px]">
						<span :class="subNavOpen ? 'rotate-[-45deg]' : 'rotate-[45deg]'" class="block absolute transition duration-100 top-[50%] left-0 w-[20px] h-[4px] rounded-full bg-blue-500"></span>
						<span :class="subNavOpen ? 'rotate-[45deg]' : 'rotate-[-45deg]'" class="block absolute transition duration-100 top-[50%] right-0 w-[20px] h-[4px] rounded-full bg-blue-500"></span>
					</span>
				</button>
				<ul x-collapse x-show="subNavOpen" class="duration-500 transition list-none m-0 p-0 bg-blue-100/40 py-4">
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
			</li>
			<li class="border-b-1 border-b-blue-200">
				<a
				title="About"$
				href="/about"
				class="block py-4 bg-white/25 text-3xl no-underline"
				>About</a>
			</li>
			<li class="border-b-1 border-b-blue-200">
				<a
				title="Blog"
				href="/blog"
				class="block py-4 bg-white/25 text-3xl no-underline"
				>Blog</a>
			</li>
			<li class="border-b-1 border-b-blue-200">
				<a
				title="Contact"
				href="/contact"
				class="block py-4 bg-white/25 text-3xl no-underline"
				>Contact</a>
			</li>
    </ul>

		
			<div class="self-end pt-4 flex flex-col items-center justify-center gap-4">
				<button class="text-xs" @click="$store.theme?.toggle()" aria-label="Label for theme toggle switch">
					<span x-text="$store.theme?.dark ? 'Turn on the lights' : 'Turn off the lights'">Dark theme</span>
				</button>
				<div class="toggle">
					<input aria-label="Theme toggle switch" @click="$store.theme?.toggle()" :checked="!$store.theme?.dark" type="checkbox"/>
				<label></label>
			</div>
</div>
		
</nav>
