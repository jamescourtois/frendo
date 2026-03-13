<nav
	x-cloak
	:class="[navOpen ? 'block left-0 opacity-100' : 'left-[100vw] opacity-0 pointer-events-none', $store.theme?.dark ? 'bg-black/70' : 'bg-white/70']" 
	id="js-nav-menu" 
	class="w-full h-full inset-0 duration-150 ease-out overscroll-contain flex justify-center flex-wrap pt-32 pb-8 px-2 backdrop-blur-md fixed z-[98]">
    <ul class="list-none w-full text-center flex flex-col m-0 p-0 " :class="navOpen ? 'opacity-100 duration-400' : 'opacity-0'">
			<li class="pl-4">
				<a
				title="<?php echo e($page->siteName); ?> About"
				href="/"
				class="block mt-0 mb-4 text-4xl no-underline <?php echo e($page->getPath() == '' ? 'active text-blue-500' : 'hover:text-blue-500'); ?>"
				>Home </a>
			</li>
			<li class="pl-4">
				<a
				title="<?php echo e($page->siteName); ?> Services"
				href="/services"
				class="block mt-0 mb-4 text-4xl no-underline <?php echo e($page->isActive('/services') ? 'active text-blue-500' : 'hover:text-blue-500'); ?>"
				>Services </a>
			</li>

			</li>
			<li class="pl-4">
				<a
				title="<?php echo e($page->siteName); ?> Work"$
				href="/work"
				class="block mt-0 mb-4 text-4xl no-underline <?php echo e($page->isActive('/work') ? 'active text-blue-500' : 'hover:text-blue-500'); ?>"
				>Work</a>
			</li>
			<li class="pl-4">
				<a
				title="<?php echo e($page->siteName); ?> About"$
				href="/about"
				class="block mt-0 mb-4 text-4xl no-underline <?php echo e($page->isActive('/about') ? 'active text-blue-500' : 'hover:text-blue-500'); ?>"
				>About</a>
			</li>
			<li class="pl-4">
				<a
				title="<?php echo e($page->siteName); ?> Blog"
				href="/blog"
				class="block mt-0 mb-4 text-4xl no-underline <?php echo e($page->isActive('/blog') ? 'active text-blue-500' : 'hover:text-blue-500'); ?>"
				>Blog</a>
			</li>
			<li class="pl-4">
				<a
				title="<?php echo e($page->siteName); ?> Contact"
				href="/contact"
				class="block mt-0 mb-4 text-4xl no-underline <?php echo e($page->isActive('/contact') ? 'active text-blue-500' : 'hover:text-blue-500'); ?>"
				>Contact</a>
			</li>
    </ul>

		
			<div class="self-end flex flex-col items-center justify-center gap-4">
				<button class="text-xs" @click="$store.theme?.toggle()" aria-label="Label for theme toggle switch">
					<span x-text="$store.theme?.dark ? 'Turn on the lights' : 'Turn off the lights'">Dark theme</span>
				</button>
				<div class="toggle">
					<input aria-label="Theme toggle switch" @click="$store.theme?.toggle()" :checked="!$store.theme?.dark" type="checkbox"/>
				<label></label>
			</div>
</div>
		
</nav>
<?php /**PATH /Users/jamescourtois/Sites/frendo/source/_nav/menu-responsive.blade.php ENDPATH**/ ?>