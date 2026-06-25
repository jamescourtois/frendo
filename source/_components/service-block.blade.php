<li x-in-view class="group min-h-[25vh] lg:min-h-auto relative overflow-hidden flex flex-col hover:text-white dark:hover:text-black [&.in-view]:text-white [&.in-view]:dark:text-black duration-700 justify-start items-start md:col-span-2 lg:col-span-6 bg-white dark:bg-not-black px-4 sm:px-8 py-12 lg:p-20">
	<div class="z-1">
		<div class="group-hover:translate-y-0 group-[&.in-view]:translate-y-0 translate-y-[29px] duration-500">
			<h2 class="mt-0 mb-2 lg:text-5xl group-hover:color-change-reverse group-[&.in-view]:color-change-reverse" style="animation-delay:350ms;">{{$title}}</h2>
			<p class="mt-0 mb-6">{{$desc}}</p>
		</div>
		<button class="inline-block font-semibold px-8 py-4 border-2 blur-[15px] group-hover:blur-none group-[&.in-view]:blur-none rounded-full border-inherit opacity-0 group-hover:opacity-100 group-[&.in-view]:opacity-100 group-hover:color-change-reverse group-[&.in-view]:color-change-reverse group-hover:duration-700 group-[&.in-view]:duration-700" style="animation-delay:350ms;">{{$button}}</button>
		<a href="/services/{{$url}}" class="opacity-0 absolute inset-0 block z-[99]">{{$cta}}</a>
	</div>
	<div class="bubble transition-transform opacity-0 group-hover:opacity-100 group-[&.in-view]:opacity-100 size-[300%] rounded-full absolute top-full left-full group-hover:translate-[-50%] group-[&.in-view]:translate-[-50%] z-[0] bg-red-500 duration-900 mix-blend-multiply dark:mix-blend-plus-lighter"></div>
	<div class="bubble transition-transform opacity-0 group-hover:opacity-100 group-[&.in-view]:opacity-100 size-[300%] rounded-full absolute bottom-full right-full group-hover:translate-[50%] group-[&.in-view]:translate-[50%] z-[0] bg-blue-500 duration-900 mix-blend-multiply dark:mix-blend-plus-lighter"></div>
	<div class="bubble transition-transform opacity-0 group-hover:opacity-100 group-[&.in-view]:opacity-100 size-[300%] rounded-full absolute left-full bottom-full group-hover:translate-x-[-50%] group-hover:translate-y-[50%] group-[&.in-view]:translate-x-[-50%] group-[&.in-view]:translate-y-[50%] z-[0] bg-green-500 duration-900 mix-blend-multiply dark:mix-blend-plus-lighter"></div>
</li>