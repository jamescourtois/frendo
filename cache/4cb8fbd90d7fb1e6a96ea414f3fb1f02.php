<div class="flex flex-col mb-4">
    <p class="font-medium my-2">
        <?php echo e($post->getDate()->format('F j, Y')); ?>

    </p>

    <h2 class="text-3xl mt-0">
        <a
            href="<?php echo e($post->getUrl()); ?>"
            title="Read more - <?php echo e($post->title); ?>"
            class="font-extrabold"
        ><?php echo e($post->title); ?></a>
    </h2>

    <p class="mb-4 mt-0"><?php echo $post->getExcerpt(200); ?></p>

    <a
        href="<?php echo e($post->getUrl()); ?>"
        title="Read more - <?php echo e($post->title); ?>"
        class="uppercase font-semibold tracking-wide mb-2"
    >Read</a>
</div>
<?php /**PATH /Users/jamescourtois/Sites/frendo/source/_components/post-preview-inline.blade.php ENDPATH**/ ?>