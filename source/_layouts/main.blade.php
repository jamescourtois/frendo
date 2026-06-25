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
        <link rel="icon" href="./favicon.svg" type="image/svg+xml">
        <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">

        @if ($page->production)
            <!-- Insert analytics code here -->
        @endif

				@if (!$page->production)
            <!-- Insert analytics code here -->
						 @viteRefresh()
        @endif
				
        <link rel="stylesheet" rel="preconnect" rel="preload" href="{{ vite('source/_assets/css/main.css') }}">
				
        <script defer type="module" src="{{ vite('source/_assets/js/main.js') }}"></script>
    </head>

    <body x-cloak x-data="{ navOpen: false }" class="bg-white text-gray-700 dark:bg-neutral-950 dark:text-not-white flex flex-col justify-between min-h-screen leading-normal font-sans">
			<header class="group duration-300 bg-white/40 dark:bg-black/30 fixed z-[99] w-full flex items-center backdrop-blur-sm h-20" role="banner">
            <div class="container flex items-center max-w-8xl mx-auto px-4 xl:px-0">
                <div class="flex items-center">
                    <a @click="$store.visitor.playIntro = true" href="/" title="{{ $page->siteName }} home" class="inline-flex items-center">
                        
												<div class="group-hover:scale-120 duration-150">@include('_layouts.logo')</div>
												
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

        <main role="main" class="flex-auto w-full pt-20 relative z-[2]">
						@yield('body')
        </main>
				@yield('cta')

        @include('_layouts.footer')

				@include('_layouts.intro')

        @stack('scripts')
    </body>

</html>
