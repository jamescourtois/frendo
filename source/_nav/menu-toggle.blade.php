<button 
	aria-label="Toggle the main menu" 
	@click="navOpen = !navOpen">
	<div id="js-nav-menu-icon" class="w-[70px] h-[55px] hamburger hamburger--arrow-r" :class="navOpen ? 'is-active' : ''">
    <div class="hamburger-box">
      <div class="hamburger-inner"></div>
    </div>
  </div>
	<span class="sr-only">Main Menu</span>
</button>