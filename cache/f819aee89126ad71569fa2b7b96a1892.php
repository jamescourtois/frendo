<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="<?php echo e($page->description ?? $page->siteDescription); ?>">

        <meta property="og:title" content="<?php echo e($page->title ? $page->title . ' | ' : ''); ?><?php echo e($page->siteName); ?>"/>
        <meta property="og:type" content="<?php echo e($page->type ?? 'website'); ?>" />
        <meta property="og:url" content="<?php echo e($page->getUrl()); ?>"/>
        <meta property="og:description" content="<?php echo e($page->description ?? $page->siteDescription); ?>" />

        <title><?php echo e($page->title ?  $page->title . ' | ' : ''); ?><?php echo e($page->siteName); ?></title>

        <link rel="home" href="<?php echo e($page->baseUrl); ?>">
        <link rel="icon" href="/favicon.ico">
        <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="<?php echo e($page->siteName); ?> Atom Feed">

        <?php if($page->production): ?>
            <!-- Insert analytics code here -->
        <?php endif; ?>

				<?php if(!$page->production): ?>
            <!-- Insert analytics code here -->
						 <?php echo vite_refresh(); ?>
        <?php endif; ?>
				
        <link rel="stylesheet" href="<?php echo e(vite('source/_assets/css/main.css')); ?>">
        <script defer type="module" src="<?php echo e(vite('source/_assets/js/main.js')); ?>"></script>
    </head>

    <body x-cloak x-data="{ navOpen: false }" :class="[navOpen ? 'overflow-hidden' : '', $store.theme?.dark ? 'bg-black text-gray-100' : 'bg-white text-gray-800']" class="flex flex-col justify-between min-h-screen leading-normal font-sans">
        <header :class="$store.theme?.dark ? 'bg-black/70' : 'bg-white/70'" class="fixed z-[99] w-full flex items-center backdrop-blur-lg h-20" role="banner">
            <div class="container flex items-center max-w-8xl mx-auto px-4 lg:px-8">
                <div class="flex items-center">
                    <a href="/" title="<?php echo e($page->siteName); ?> home" class="inline-flex items-center">
                        <div class="flex w-[139px] h-[32px]">
													<?php echo $__env->make('_layouts.logo', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
												</div>

                        <span class="sr-only"><?php echo e($page->siteName); ?></span>
                    </a>
                </div>

                <div id="vue-search" class="flex flex-1 justify-end items-center">
                    <?php echo $__env->make('_nav.menu', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                    <?php echo $__env->make('_nav.menu-toggle', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                </div>
            </div>
        </header>

        <?php echo $__env->make('_nav.menu-responsive', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <main role="main" class="flex-auto w-full container mx-auto pt-28 px-4 pb-6">
            <?php echo $__env->yieldContent('body'); ?>
        </main>

        <footer class="bg-black text-gray-400 text-center text-sm py-4" role="contentinfo">
            <ul class="flex flex-col font-normal md:flex-row justify-center list-none">
                <li class="md:mr-2">
                    <span class="text-xl inline-block translate-y-[4px]">&copy;</span> <a class="text-base text-blue-500" href="<?php echo e($page->baseUrl); ?>" class="font-extrabold">Frendo</a> Web Development <?php echo e(date('Y')); ?>.
                </li>
            </ul>
        </footer>
				<div x-init="setTimeout(() => $store.theme?.closeIntro(), 3000)" :class="$store.theme?.showIntro ? 'fixed inset-0 z-[99] bg-red-500' : 'hidden pointer-events-none' " id="intro" class="intro"></div>
        <?php echo $__env->yieldPushContent('scripts'); ?>
    </body>

</html>
<?php /**PATH /Users/jamescourtois/Sites/frendo/source/_layouts/main.blade.php ENDPATH**/ ?>