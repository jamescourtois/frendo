<?php $__env->startSection('body'); ?>
	<div class="flex flex-col items-center justify-center">
			<h1>Contact Card</h1>
			<a href="<?php echo e(vite('source/_assets/files/frendo.vcf')); ?>"
				download="frendo.vcf"
				type="text/vcard"
				class="mt-8 px-6 py-3 btn-special text-white rounded-full font-semibold">
				Add to Contacts
		</a>
	</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('_layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/jamescourtois/Sites/frendo/cache/8c292f18315030ca1d5c1f747b2568356c171769.blade.php ENDPATH**/ ?>