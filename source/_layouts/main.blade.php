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

        @viteRefresh()
        <link rel="stylesheet" href="{{ vite('source/_assets/css/main.css') }}">
        <script defer type="module" src="{{ vite('source/_assets/js/main.js') }}"></script>
    </head>

    <body x-data="{ navOpen: false, dark: false }" :class="[navOpen ? 'overflow-hidden' : '', dark ? 'bg-black text-gray-100' : 'bg-white text-gray-800']" class="flex flex-col justify-between min-h-screen leading-normal font-sans">
        <header :class="dark ? 'bg-black/70' : 'bg-white/70'" class="fixed z-[99] w-full flex items-center backdrop-blur-lg h-20" role="banner">
            <div class="container flex items-center max-w-8xl mx-auto px-4 lg:px-8">
                <div class="flex items-center">
                    <a href="/" title="{{ $page->siteName }} home" class="inline-flex items-center">
                        <img class="h-8 md:h-10 mr-3":src="dark ? '/assets/img/frendo_logo_dark.svg' : '/assets/img/frendo_logo.svg'" alt="{{ $page->siteName }} logo" />

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

        <main role="main" class="flex-auto w-full container mx-auto pt-28 px-4 pb-6">
            @yield('body')
        </main>

        <footer class="bg-black text-gray-400 text-center text-sm py-4" role="contentinfo">
            <ul class="flex flex-col font-normal md:flex-row justify-center list-none">
                <li class="md:mr-2">
                    <span class="text-xl inline-block translate-y-[4px]">&copy;</span> <a class="text-base text-blue-500" href="{{ $page->baseUrl }}" class="font-extrabold">Frendo</a> Web Development {{ date('Y') }}.
                </li>
            </ul>
        </footer>
        @stack('scripts')
    </body>
</html>
