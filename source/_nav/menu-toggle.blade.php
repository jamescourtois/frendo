<button
	class="lg:hidden"
	aria-label="Toggle the main menu" 
	@click="navOpen = !navOpen">
	<div class="w-[70px] h-[55px] hamburger hamburger--arrow-r" :class="navOpen ? 'is-active' : ''">
    <div class="hamburger-box">
      <div class="hamburger-inner"></div>
    </div>
  </div>
	<span class="sr-only" x-text="navOpen ? 'Close Main Menu' : 'Open Main Menu'"></span>
</button>