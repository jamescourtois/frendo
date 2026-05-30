<nav class="hidden lg:flex items-center gap-8 xl:gap-10 justify-end">
	
		<a
			class="{{ $page->isActive('/websites') ? 'active' : '' }}"
			title="Website Services"
			href="/services/websites">
				Websites
		</a>
	
	
		<a
			class="{{ $page->isActive('/ecommerce') ? 'active' : '' }}"
			title="E-Commerce Services"
			href="/services/ecommerce">
				E-Commerce
		</a>
	
	
		<a
			class="{{ $page->isActive('/custom-web-apps') ? 'active' : '' }}"
			title="Custom Web Apps Services"
			href="/services/custom-web-apps">
				Custom Apps
		</a>
	
	
		<a
			class="{{ $page->isActive('/digital-consulting') ? 'active' : '' }}"
			title="Digital Consulting Services"
			href="/services/digital-consulting">
				Consulting
		</a>
		
		<a
			class="{{ $page->isActive('/contact') ? 'active' : '' }}"
			title="Contact Frendo"
			href="/contact">
				Contact
		</a>
					
   

    
</nav>
