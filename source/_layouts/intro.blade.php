<div x-cloak id="intro" x-init="if ($store.visitor.playIntro) { setTimeout(() => { $el.classList.add('opacity-0'); $store.visitor.playIntro = false }, 3500) } else { $el.classList.add('opacity-0') }" class="intro fixed inset-0 z-[999] bg-white dark:bg-black pointer-events-none duration-500 flex flex-col items-center justify-center">
		<div class="wrap relative w-[300px] h-[300px] lg:scale-[1.7] text-black dark:text-white">
			<div class="gradient-1"></div>
			<div class="gradient-2"></div>
			<div class="gradient-3"></div>
			<div class="backfill-1"></div>
			<div class="backfill-2"></div>
			<div class="backfill-3"></div>
			<div class="logotype rgb-fade">Frendo</div>
		</div>
</div>