<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">

        <meta property="og:title" content="{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:type" content="{{ $page->type ?? 'website' }}" />
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}" />

        <title>{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="icon" href="/favicon.ico">
        <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">

        @if ($page->production)
            <!-- Insert analytics code here -->
        @endif

				@if (!$page->production)
            <!-- Insert analytics code here -->
						 @viteRefresh()
        @endif
				
        <link rel="stylesheet" href="{{ vite('source/_assets/css/main.css') }}">
        <script defer type="module" src="{{ vite('source/_assets/js/main.js') }}"></script>
    </head>

    <body x-cloak x-data="{ navOpen: false }" class="bg-white text-gray-800 dark:bg-black dark:text-gray-100 flex flex-col justify-between min-h-screen leading-normal font-sans">
      
			<header class="bg-white/70 dark:bg-black/70 fixed z-[99] w-full flex items-center backdrop-blur-lg h-20" role="banner">
            <div class="container flex items-center max-w-8xl mx-auto px-4 lg:px-8">
                <div class="flex items-center">
                    <a href="/" @click="$store.theme.showIntro = true" title="{{ $page->siteName }} home" class="inline-flex items-center">
                        <div class="flex w-[139px] h-[32px]">
													@include('_layouts.logo')
												</div>

                        <span class="sr-only">{{ $page->siteName }}</span>
                    </a>
                </div>

                <div id="vue-search" class="flex flex-1 justify-end items-center">
                    @include('_nav.menu')

                    @include('_nav.menu-toggle')
                </div>
            </div>
        </header>

        @include('_nav.menu-responsive')

        <main role="main" class="flex-auto w-full pt-28">
            <div class="container mx-auto px-4">
							@yield('body')
						</div>
						@yield('body-full')
        </main>

        <footer class="bg-white text-gray-700 dark:bg-black dark:text-gray-400 text-center text-sm py-4" role="contentinfo">
            <ul class="flex flex-col font-normal md:flex-row justify-center list-none">
                <li class="md:mr-2">
                    <span class="text-xl inline-block translate-y-[4px]">&copy;</span> <a class="text-base text-blue-500" href="{{ $page->baseUrl }}" class="font-extrabold">Frendo</a> Web Development {{ date('Y') }}.
                </li>
            </ul>
        </footer>
				<div x-cloak id="intro" x-init="setTimeout(() => $store.theme?.closeIntro(), 12000)" :class="$store.theme?.showIntro ? '' : 'hidden pointer-events-none'"  class="intro fixed inset-0 z-[99] bg-black flex flex-col items-center justify-center">
					<div id="intro-wrapper relative">
						<div class="animate-f relative w-[300px] h-[300px]">
							<div class="absolute top-[60px] left-[60px]">
								<div class="absolute gradient-1"></div>
								<div class="absolute gradient-2"></div>
								<div class="absolute gradient-3"></div>
								<div class="absolute backfill-1"></div>
								<div class="absolute backfill-2"></div>
								<div class="absolute backfill-3"></div>
							</div>
							<svg
								class="absolute top-0 left-0 shield z-[-1]" 
								width="100%"
								height="100%" viewBox="0 0 250 250" version="1.1" xmlns="http://www.w3.org/2000/svg"
								xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/"
								style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
								<path
									d="M49.906,4l151.39,-0l44.452,44.816l0,50.432l-146.136,145.951l-50.069,0l-45.542,-46.633l0,-149.844l45.906,-44.723Z" />
								<path
									d="M202.962,-0l46.786,47.168l-0,53.738l-148.481,148.292l-53.409,0l-47.858,-49.003l0,-153.16l48.279,-47.035l154.683,-0Zm-153.056,4l-45.906,44.723l-0,149.844l45.542,46.633l50.069,-0l146.136,-145.951l-0,-50.432l-44.452,-44.816l-151.39,0Z"
									style="fill:#fff;" />
							</svg>
							<div class="shield-cover absolute bg-black"></div>
							<div class="shield-cover-2 absolute bg-black"></div>
							
							<div class="text-wrapper absolute top-full left-0 w-full">
								<div class="font-extrabold text-[6rem] text-white text-center w-full">Frendo</div>
								<div class="text-[0.925rem] tracking-widest uppercase text-white text-center mb-1 w-full">Web Development & Consulting</div>
								<div class="text-[0.625rem]  tracking-widest uppercase text-white text-center w-full">St. Louis, MO</div>
							</div>
						</div>
						</div>
				</div>
        @stack('scripts')
    </body>

</html>
